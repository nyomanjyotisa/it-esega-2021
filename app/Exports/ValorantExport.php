<?php

namespace App\Exports;

use App\Valorant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ValorantExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Valorant::all();
    }
}
