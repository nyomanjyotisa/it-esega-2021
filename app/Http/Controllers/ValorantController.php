<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valorant;
use App\ValorantPlayer;
use App\Exports\ValorantExport;
use Maatwebsite\Excel\Facades\Excel;

class ValorantController extends Controller
{
    public function index(){
        $teams = Valorant::all();
        return view('admin/valorant', ['teams' => $teams]);
    }

    public function detail($id){
        $players = ValorantPlayer::where('team_id', $id)->get();
        $team = Valorant::find($id);
        $lomba = 'valorant';
        return view('admin/detail', ['players' => $players, 'team' => $team, 'lomba' => $lomba]);
    }

        // hapus sementara
    public function delete($id)
    {
        $team = Valorant::find($id);
        $team->delete();

        return redirect('/admin/valorant');
    }

    public function setpaid($id){
        $team = Valorant::find($id);
        $team->status = 'approved';
        $team->save();
        return redirect()->back();
    }

    public function export_excel()
	{
		return Excel::download(new ValorantExport, 'valorant.xlsx');
	}
}