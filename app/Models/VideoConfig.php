<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoConfig extends Model
{
    protected $fillable = [
        'video_id',
        'file_hash',
        'file_name',
        'file_path',
        'duration',
        'video_codec',
        'video_width',
        'video_height',
        'video_bitrate',
        'audio_codec',
        'audio_bitrate',
        'audio_channels',
        'audio_sample_rate',
        'transcoded',
        'pushed',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
