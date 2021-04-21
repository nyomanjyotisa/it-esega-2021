<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MobileLegend;
use App\MobileLegendPlayer;

class MobileLegendController extends Controller
{
    public function index(){
        $teams = MobileLegend::all();
        return view('admin/mobilelegend', ['teams' => $teams]);
    }
}