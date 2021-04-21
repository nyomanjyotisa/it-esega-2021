<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PubgmPlayer extends Model
{
    protected $fillable = [
        'team_id',
        'name',
        'nick',
        'id_pubgm',
        'alamat',
        'no_hp',
        'id_line',
        'role',
    ];

    public function team(){
        return $this->belongsTo('App\Pubgm', 'team_id', 'id');
    }
}
