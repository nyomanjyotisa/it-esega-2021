<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MobileLegend;
use App\MobileLegendPlayer;
use App\Exports\MobileLegendExport;
use App\Exports\MobileLegendPlayerExport;
use Maatwebsite\Excel\Facades\Excel;

class MobileLegendController extends Controller
{
    public function index(){
        $teams = MobileLegend::all();
        return view('admin/mobilelegend', ['teams' => $teams]);
    }

    public function detail($id){
        $players = MobileLegendPlayer::where('team_id', $id)->get();
        $team = MobileLegend::find($id);
        $lomba = 'mobilelegend';
        return view('admin/detail', ['players' => $players, 'team' => $team, 'lomba' => $lomba]);
    }

        // hapus sementara
    public function delete($id)
    {
        $team = MobileLegend::find($id);
        $team->delete();

        return redirect('/admin/mobilelegend');
    }

    public function setpaid($id){
        $team = MobileLegend::find($id);
        $team->status = 'approved';
        $team->save();
        return redirect()->back();
    }

    public function export_excel()
	{
		return Excel::download(new MobileLegendExport, 'mobile-legend.xlsx');
	}

    public function player_export_excel()
	{
		return Excel::download(new MobileLegendPlayerExport, 'mobile-legend-player.xlsx');
	}
}