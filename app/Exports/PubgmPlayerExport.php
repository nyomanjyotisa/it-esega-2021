<?php

namespace App\Exports;

use App\PubgmPlayer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PubgmPlayerExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PubgmPlayer::with('team')->get();
    }

    public function map($player) : array {
        return [
            $player->id,
            $player->name,
            $player->nick,
            $player->id_pubgm,
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
           'id_pubgm',
           'alamat',
           'no_hp',
           'id_line',
           'role',
           'tim',
           'status'
        ] ;
    }
}
