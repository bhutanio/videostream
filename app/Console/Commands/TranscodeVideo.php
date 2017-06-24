<?php

namespace App\Console\Commands;

use App\Models\Video;
use App\Models\VideoConfig;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class TranscodeVideo extends Command
{
    protected $signature = 'videoz:transcode';

    protected $description = 'Transcode Videos';

    /**
     * @var \Illuminate\Filesystem\FilesystemAdapter
     */
    private $storage;

    public function __construct()
    {
        parent::__construct();
        $this->storage = Storage::disk('local');
    }

    public function handle()
    {
        $videos = VideoConfig::where('transcoded', 0)->get();
        foreach ($videos as $video) {
            $video->transcoded = 1;
            $video->save();

            $path_prepend = 'storage/videos/' . substr($video->file_hash, 0, 2) . '/';

            File::deleteDirectory(public_path($path_prepend . $video->file_hash . '/'));
            File::makeDirectory(public_path($path_prepend . $video->file_hash . '/'), '0755', true, true);

            $this->ffmpegTranscode($video, $path_prepend);

            $this->storage->deleteDirectory($video->file_path);

            $video->transcoded = 2;
            $video->save();
            $live_video = Video::find($video->video_id);
            $live_video->file_hash = $video->file_hash;
            $live_video->file_name = $video->file_hash . '.mp4';
            $live_video->file_path = $path_prepend . $video->file_hash . '/';
            $live_video->published = 1;
            $live_video->save();

            $this->createTorrent($video, $path_prepend);

            $this->extractImages($video, $path_prepend);

            $this->info('Done: ' . $live_video->file_name);
        }

        $this->info('Nothing to Transcode');
    }

    /**
     * @param $video
     * @param $path_prepend
     */
    private function ffmpegTranscode($video, $path_prepend): void
    {
        $command_extra = '';

        if (
            $video->video_codec == 'h264' &&
            (
                ($video->video_width >= 1900 && $video->video_bitrate < 6291456) ||
                ($video->video_width < 1300 && $video->video_bitrate < 4194304)
            ) &&
            $video->audio_codec == 'aac' &&
            $video->audio_bitrate < 133120 &&
            Str::endsWith($video->file_name, '.mp4')
        ) {
//            File::move(storage_path('app/' . $video->file_path . $video->file_name),
//                public_path($path_prepend . $video->file_hash . '/' . $video->file_name));

            $command_extra .= ' -vcodec copy ';
            $command_extra .= ' -acodec copy ';
        } else {
            if ($video->video_width >= 1920 && $video->video_bitrate >= 6291456) {
                $command_extra .= ' -c:v libx264 -b:v 4096k -vf scale=1920:-1 ';
            } elseif ($video->video_width >= 1280 && $video->video_bitrate >= 4194304) {
                $command_extra .= ' -c:v libx264 -b:v 2048k -vf scale=1280:-1 ';
            } else {
                if ($video->video_codec == 'h264') {
                    $command_extra .= ' -vcodec copy ';
                } else {
                    $command_extra .= ' -c:v libx264 ';
                    if ($video->video_width >= 1920) {
                        $command_extra .= ' -vf scale=1920:-1 -b:v ' . ((int)($video->video_bitrate / 1000)) . 'k ';
                    }
                    if ($video->video_width >= 1280) {
                        $command_extra .= ' -vf scale=1280:-1 -b:v ' . ((int)($video->video_bitrate / 1000)) . 'k ';
                    }

                    if ($video->video_bitrate >= 1638400) {
                        $command_extra .= ' -b:v 1500k ';
                    } else {
                        $command_extra .= ' -b:v ' . ((int)($video->video_bitrate / 1000)) . 'k ';
                    }
                }
            }

            if ($video->audio_bitrate >= 133120) {
                $command_extra .= ' -b:a 128k ';
            } else {
                if ($video->audio_codec == 'aac') {
                    $command_extra .= ' -acodec copy ';
                } else {
                    $command_extra .= ' -b:a ' . ((int)($video->audio_bitrate / 1000)) . 'k ';
                }
            }
        }

        $command_string = "/usr/bin/ffmpeg -y -i '" . storage_path('app/' . $video->file_path . $video->file_name) . "' -strict -2 -preset slow -movflags +faststart " . $command_extra . "'" . public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '.mp4') . "'";
        $this->info($command_string);

        $command = new Process($command_string);
        $command->setTimeout(0);
        $command->start();

        foreach ($command as $type => $data) {
            echo "\n" . $data;
        }

    }

    /**
     * Extract Images
     *
     * @param $path_prepend
     * @param $video
     */
    private function extractImages($video, $path_prepend): void
    {
        $ffmpeg = app('ffmpeg');

        $task = $ffmpeg->open(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '.mp4'));

        $diff = $divider = (int)($video->duration / 6);

        $task
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds($diff))
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_01.png'));
        $diff = $diff + $divider;

        $task
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds($diff))
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_02.png'));
        $diff = $diff + $divider;

        $task
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds($diff))
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_03.png'));
        $diff = $diff + $divider;

        $task
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds($diff))
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_04.png'));
        $diff = $diff + $divider;

        $task
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds($diff))
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_05.png'));

        $task
            ->gif(\FFMpeg\Coordinate\TimeCode::fromSeconds((int)$video->duration / 6),
                new \FFMpeg\Coordinate\Dimension(320, 240), 10)
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_01.gif'));

        $task
            ->gif(\FFMpeg\Coordinate\TimeCode::fromSeconds((int)$video->duration / 2),
                new \FFMpeg\Coordinate\Dimension(320, 240), 10)
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_02.gif'));

        $task
            ->gif(\FFMpeg\Coordinate\TimeCode::fromSeconds((int)$video->duration - ($video->duration / 6)),
                new \FFMpeg\Coordinate\Dimension(320, 240), 10)
            ->save(public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '_03.gif'));
    }

    /**
     * Create Torrent File
     *
     * @param $path_prepend
     * @param $video
     */
    private function createTorrent($video, $path_prepend): void
    {
        $torrent_command = "transmission-create -o '" . public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '.torrent') . "' -p -t 'udp://tracker.openwebtorrent.com' '" . public_path($path_prepend . $video->file_hash . '/' . $video->file_hash . '.mp4') . "'";
        $this->info($torrent_command);

        $command = new Process($torrent_command);
        $command->setTimeout(0);
        $command->start();
        foreach ($command as $type => $data) {
            echo "\n" . $data;
        }
    }
}
