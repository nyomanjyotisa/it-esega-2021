<?php

namespace App\Exports;

use App\Pubgm;
use Maatwebsite\Excel\Concerns\FromCollection;

class PubgmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pubgm::all();
    }
}
