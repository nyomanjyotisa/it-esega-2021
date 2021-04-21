<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MobileLegend extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'proof_of_payment',
        'ktp',
        'status',
    ];
}
