<?php

namespace App\Exports;

use App\MobileLegend;
use Maatwebsite\Excel\Concerns\FromCollection;

class MobileLegendExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MobileLegend::all();
    }
}
