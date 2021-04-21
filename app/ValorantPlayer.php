<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ValorantPlayer extends Model
{
    use SoftDeletes;
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

    public function team(){
        return $this->belongsTo('App\Valorant', 'team_id', 'id');
    }
}
