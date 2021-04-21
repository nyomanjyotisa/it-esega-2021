<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pubgm extends Model
{
    protected $fillable = [
        'name',
        'proof_of_payment',
        'ktp',
        'status',
    ];
}
