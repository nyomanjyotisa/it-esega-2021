<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MobileLegendPlayer extends Model
{
    use SoftDeletes;
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
