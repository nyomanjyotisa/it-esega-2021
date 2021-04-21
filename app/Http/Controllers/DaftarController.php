<?php

namespace App\Http\Controllers;
use App\MobileLegend;
use App\MobileLegendPlayer;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function mobilelegend(Request $request){
        $team = new MobileLegend;

        $team->name = $request->namaTeam;
        
        $proof = $request->file('buktiBayar');
        $path = 'bukti-bayar';
        $nama_file = time()."_".$request->namaTeam;
        $proof->move($path,$nama_file);
        $team->proof_of_payment = $nama_file;

        $ktp = $request->file('ktp');
        $path = 'KTP';
        $nama_file = time()."_".$request->namaTeam;
        $ktp->move($path,$nama_file);
        $team->ktp = $nama_file;

        $team->status = 'not_paid';
        $team->save();

        // ketua
        $ketua = new MobileLegendPlayer;
        $ketua->team_id = $team->id;
        $ketua->name = $request->namaKetua;
        $ketua->nick = $request->nickKetua;
        $ketua->id_server = $request->idKetua;
        $ketua->alamat = $request->alamatKetua;
        $ketua->no_hp = $request->nohpKetua;
        $ketua->id_line = $request->lineKetua;
        $ketua->role = 'ketua';
        $ketua->save();

        // member 2
        $member2 = new MobileLegendPlayer;
        $member2->team_id = $team->id;
        $member2->name = $request->nama2;
        $member2->nick = $request->nick2;
        $member2->id_server = $request->id2;
        $member2->alamat = $request->alamat2;
        $member2->no_hp = $request->nohp2;
        $member2->role = 'member';
        $member2->save();

        // member 3
        $member3 = new MobileLegendPlayer;
        $member3->team_id = $team->id;
        $member3->name = $request->nama3;
        $member3->nick = $request->nick3;
        $member3->id_server = $request->id3;
        $member3->alamat = $request->alamat3;
        $member3->no_hp = $request->nohp3;
        $member3->role = 'member';
        $member3->save();

        // member 4
        $member4 = new MobileLegendPlayer;
        $member4->team_id = $team->id;
        $member4->name = $request->nama4;
        $member4->nick = $request->nick4;
        $member4->id_server = $request->id4;
        $member4->alamat = $request->alamat4;
        $member4->no_hp = $request->nohp4;
        $member4->role = 'member';
        $member4->save();

        // member 5
        $member5 = new MobileLegendPlayer;
        $member5->team_id = $team->id;
        $member5->name = $request->nama5;
        $member5->nick = $request->nick5;
        $member5->id_server = $request->id5;
        $member5->alamat = $request->alamat5;
        $member5->no_hp = $request->nohp5;
        $member5->role = 'member';
        $member5->save();

        // cadangan
        $cadangan = new MobileLegendPlayer;
        $cadangan->team_id = $team->id;
        $cadangan->name = $request->nama6;
        $cadangan->nick = $request->nick6;
        $cadangan->id_server = $request->id6;
        $cadangan->alamat = $request->alamat6;
        $cadangan->no_hp = $request->nohp6;
        $cadangan->role = 'cadangan';
        $cadangan->save();

        return redirect ('/');
    }
}
