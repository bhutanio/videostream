<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $fillable = [
        'group',
        'group_code',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
