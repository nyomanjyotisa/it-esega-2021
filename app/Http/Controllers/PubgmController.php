<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pubgm;
use App\PubgmPlayer;
use App\Exports\PubgmExport;
use Maatwebsite\Excel\Facades\Excel;

class PubgmController extends Controller
{
    public function index(){
        $teams = Pubgm::all();
        return view('admin/pubgm', ['teams' => $teams]);
    }

    public function detail($id){
        $players = PubgmPlayer::where('team_id', $id)->get();
        $team = Pubgm::find($id);
        $lomba = 'pubgm';
        return view('admin/detail', ['players' => $players, 'team' => $team, 'lomba' => $lomba]);
    }

        // hapus sementara
    public function delete($id)
    {
        $team = Pubgm::find($id);
        $team->delete();

        return redirect('/admin/pubgm');
    }

    public function setpaid($id){
        $team = Pubgm::find($id);
        $team->status = 'approved';
        $team->save();
        return redirect()->back();
    }

    public function export_excel()
	{
		return Excel::download(new PubgmExport, 'pubgm.xlsx');
	}
}