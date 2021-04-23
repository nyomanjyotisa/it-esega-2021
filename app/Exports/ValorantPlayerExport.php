<?php

namespace App\Exports;

use App\ValorantPlayer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ValorantPlayerExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ValorantPlayer::with('team')->get();
    }

    public function map($player) : array {
        return [
            $player->id,
            $player->name,
            $player->nick,
            $player->tagline,
            $player->alamat,
            $player->no_hp,
            $player->id_line,
            $player->role,
            $player->team->name,
            $player->team->status
        ] ;
    }
 
    public function headings() : array {
        return [
            'id',
           'nama',
           'nick',
           'tagline',
           'alamat',
           'no_hp',
           'id_line',
           'role',
           'tim',
           'status'
        ] ;
    }
}
