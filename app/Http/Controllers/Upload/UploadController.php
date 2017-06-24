<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoConfig;
use App\Services\ChunkUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    /**
     * @var ChunkUploader
     */
    private $uploader;

    /**
     * @var \Illuminate\Filesystem\FilesystemAdapter
     */
    private $storage;

    public function __construct()
    {
        $this->uploader = new ChunkUploader();
        $this->storage = Storage::disk('local');

        $this->uploader->allowedExtensions = [
            '3gp',
            'avi',
            'flv',
            'm4v',
            'mov',
            'mp4',
            'mpeg',
            'mpg',
            'vob',
            'webm',
            'wmv',
        ];

        $this->uploader->inputName = "qqfile";
        $this->uploader->chunksFolder = storage_path("app/chunks");
    }

    public function index()
    {
        meta()->setMeta('Upload Video');

        return view('upload.upload');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
        ]);

        $uuid = $request->get('uuid');
        $filename = $request->get('filename');

        $video_path = 'videos/' . $uuid . '/';

        if ($this->storage->exists($video_path . $filename)) {
            $ffmpeg = app('ffmpeg')->open(storage_path('app/' . $video_path . $filename));
            $streams = $ffmpeg->getStreams();

            $ffmpeg_video = $streams->videos()->first();
            $ffmpeg_audio = $streams->audios()->first();

            if (count($ffmpeg_video->all()) < 10) {
                return $this->invalidVideo($video_path);
            }

            $file_hash = sha1_file(storage_path('app/' . $video_path . $filename));
            $media_info = app('mediainfo')->getInfo(storage_path('app/' . $video_path . $filename));

            if (!isset($media_info->getVideos()[0])) {
                return $this->invalidVideo($video_path);
            }

            $video_duration = $media_info->getGeneral()->get('duration');
            if (!empty($video_duration->getMilliseconds())) {
                $duration = (float)$video_duration->getMilliseconds();
            }

            $video_db = Video::create([
                'title'       => $request->get('title'),
                'description' => $request->get('description'),
                'published'   => false,
                'created_by'  => auth()->id(),
            ]);

            $video_config_db = VideoConfig::create([
                'video_id'          => $video_db->id,
                'file_hash'         => $file_hash,
                'file_name'         => $file_hash . '.' . $media_info->getGeneral()->get('file_extension'),
                'file_path'         => $video_path,
                'duration'          => isset($duration) ? ($duration / 1000) : 0,
                'video_codec'       => $ffmpeg_video->get('codec_name'),
                'video_width'       => $media_info->getVideos()[0]->get('width')->getAbsoluteValue(),
                'video_height'      => $media_info->getVideos()[0]->get('height')->getAbsoluteValue(),
                'video_bitrate'     => $media_info->getVideos()[0]->get('bit_rate')->getAbsoluteValue(),
                'audio_codec'       => !empty($ffmpeg_audio) ? $ffmpeg_audio->get('codec_name') : null,
                'audio_bitrate'     => isset($media_info->getAudios()[0]) ? $media_info->getAudios()[0]->get('bit_rate')->getAbsoluteValue() : null,
                'audio_channels'    => isset($media_info->getAudios()[0]) ? $media_info->getAudios()[0]->get('channel_s')->getAbsoluteValue() : null,
                'audio_sample_rate' => isset($media_info->getAudios()[0]) ? $media_info->getAudios()[0]->get('sampling_rate')->getAbsoluteValue() : null,
                'transcoded'        => false,
                'pushed'            => false,
                'created_by'        => auth()->id(),
            ]);

            $this->storage->move($video_path . $filename,
                $video_path . $file_hash . '.' . $media_info->getGeneral()->get('file_extension'));

            flash('Video uploaded successfully', 'success');

            return redirect()->back();
        }

        flash('Error uploading file', 'error');

        return redirect()->back();
    }

    public function video()
    {
        $result = $this->uploader->handleUpload(storage_path("app/videos"));
        $result["uploadName"] = $this->uploader->getUploadName();

        return response()->json($result);
    }

    public function videoDone()
    {
        $result = $this->uploader->combineChunks(storage_path("app/videos"));

        return response()->json($result);
    }

    public function videoDelete($id)
    {
        $result = $this->uploader->handleDelete(storage_path("app/videos"));

        return response()->json($result);
    }

    private function invalidVideo($video_path)
    {
        $this->storage->deleteDirectory($video_path);
        flash('File you uploaded is not a valid video file', 'error');

        return redirect()->back();
    }
}
