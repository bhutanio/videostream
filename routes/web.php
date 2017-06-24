<?php

Auth::routes();
Route::get('activate/{token}', 'Auth\ActivationController@activate');
Route::get('email/unsubscribe', 'StaticPagesController@unsubscribe');

Route::group(['middleware' => 'auth'], function () {
    Route::get('upload', 'Upload\UploadController@index');
    Route::post('upload', 'Upload\UploadController@upload');
    Route::post('upload/video', 'Upload\UploadController@video');
    Route::post('upload/video/done', 'Upload\UploadController@videoDone');
    Route::delete('delete/video/{id}', 'Upload\UploadController@videoDelete');

    Route::get('/', 'HomeController@index');

    Route::get('videos', function () {
        $data['videos'] = \App\Models\Video::where('published', 1)->latest()->paginate(48);
        meta()->setMeta('Videos');

        return view('videos', $data);
    });

    Route::get('player/{id}', function ($id) {

        $data['video'] = \App\Models\Video::findOrFail($id);
        meta()->setMeta($data['video']->title);

        return view('player', $data);
    });

    Route::get('tinker', function () {
        $video_db = \App\Models\VideoConfig::findOrFail(1);
        $file = storage_path('app/' . $video_db->file_path . $video_db->file_name);
        $media_info = app('mediainfo')->getInfo($file);

        dump($media_info->getGeneral()->get('file_extension'));
    });

    Route::get('torrent/{id}', function ($id) {
        $bencoder = new \App\Services\TorrentEncoder();

        $video = \App\Models\Video::findOrFail($id);
        $torrent_file = $video->file_path . $video->file_hash . '.torrent';
        $torrent = $bencoder->decode(File::get($torrent_file));
        $torrent = $bencoder->sanitize($torrent);
        $torrent['url-list'][0] = url($video->file_path . $video->file_name);

        $content = $bencoder->encode($torrent);

        $headers = [
            'Content-Type'              => 'application/x-bittorrent',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Length'            => strlen($content),
            'Accept-Ranges'             => 'bytes',
            'Content-Disposition'       => 'attachment; filename="' . $video->file_hash . '.torrent' . '"',
            'Cache-Control'             => 'private, max-age=0, no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
            'Pragma'                    => 'no-cache',
        ];

        return response($content, 200, $headers)
            ->setLastModified(carbon())
            ->setExpires(carbon()->subYears(10));
    });

    Route::get('bootstrap', function () {
        return view('bootstrap');
    });
});