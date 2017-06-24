<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Rych\Bencode\Bencode;

class TorrentEncoder
{
    /**
     * @var Bencode
     */
    private $bencode;

    public function __construct()
    {
        $this->bencode = app(Bencode::class);
    }

    public function decode($file)
    {
        return $this->bencode->decode($this->initData($file));
    }

    public function infoHash(array $torrent)
    {
        return sha1($this->encode($torrent['info']));
    }

    public function encode(array $torrent)
    {
        return $this->bencode->encode($torrent);
    }

    public function privatize(array $torrent, $announce, $comment = null, $created_by = null)
    {
        $torrent['info']['private'] = 1;

        return [
            'announce'      => $announce,
            'comment'       => $comment ?: 'Torrent downloaded from ' . parse_url(env('APP_URL'), PHP_URL_HOST),
            'created by'    => $created_by ?: parse_url(env('APP_URL'), PHP_URL_HOST),
            'creation date' => (int)time(),
            'encoding'      => !empty($torrent['encoding']) ? $torrent['encoding'] : 'UTF-8',
            'info'          => $torrent['info'],
        ];
    }

    public function sanitize(array $torrent)
    {
        return [
            'announce' => env('SITE_TRACKER_ANNOUNCE'),
            'encoding' => !empty($torrent['encoding']) ? $torrent['encoding'] : 'UTF-8',
            'info'     => $torrent['info'],
        ];
    }

    public function files(array $data)
    {
        $file_count = 0;
        $file_list = [];

        $name = isset($data['info']['name']) ? convert_to_utf8($data['info']['name']) : null;

        if (!isset($data['info']['files'])) {
            // Single file mode
            $file_count = 1;
            $total_size = $data['info']['length'];
            $file_list[] = ['size' => $total_size, 'name' => convert_to_utf8($data['info']['name'])];
        } else {
            // Multiple file mode
            $file_names = [];
            $total_size = 0;
            $files = $data['info']['files'];
            foreach ($files as $file) {
                $file_count++;
                $total_size += $file['length'];
                $file_size = $file['length'];

                $file_name = ltrim(implode('/', $file['path']), '/');

                $file_list[] = ['size' => $file_size, 'name' => convert_to_utf8($file_name)];
                $file_names[] = $file_name;
            }
            array_multisort($file_names, $file_list);
        }

        return ['name' => $name, 'file_count' => $file_count, 'total_size' => $total_size, 'files' => $file_list];
    }

    private function initData($data)
    {
        if ($data instanceof UploadedFile) {
            return File::get($data->getRealPath());
        }

        return (string)$data;
    }
}