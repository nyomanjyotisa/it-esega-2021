<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valorant extends Model
{
    protected $fillable = [
        'name',
        'proof_of_payment',
        'ktp',
        'status',
    ];
}
