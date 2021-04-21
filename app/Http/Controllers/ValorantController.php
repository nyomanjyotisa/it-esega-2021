<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valorant;
use App\ValorantPlayer;

class ValorantController extends Controller
{
    public function index(){
        $teams = Valorant::all();
        return view('admin/valorant', ['teams' => $teams]);
    }
}