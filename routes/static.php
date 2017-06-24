<?php

Route::get('poster/{id}-{iid}.png', function ($id, $iid) {
    $video = \App\Models\Video::findOrFail($id);
    $image = Image::make(public_path($video->file_path . $video->file_hash . '_0' . $iid . '.png'));
    $image->fit(640, 360);

    return $image->response()->setExpires(carbon()->addDays(30))
        ->header('Cache-Control', 'public,max-age=' . (3600 * 24 * 30) . ',s-maxage=' . (3600 * 24 * 30));
});
