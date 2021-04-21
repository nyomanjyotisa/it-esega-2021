<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileLegendPlayer extends Model
{
    protected $fillable = [
        'team_id',
        'name',
        'nick',
        'id_server',
        'alamat',
        'no_hp',
        'id_line',
        'role',
    ];

    public function team(){
        return $this->belongsTo('App\MobileLegend', 'team_id', 'id');
    }
}
