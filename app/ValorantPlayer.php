<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorantPlayer extends Model
{
    protected $fillable = [
        'team_id',
        'name',
        'nick',
        'tagline',
        'alamat',
        'no_hp',
        'id_line',
        'role',
    ];
}
