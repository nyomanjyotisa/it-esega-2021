<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pubgm;
use App\PubgmPlayer;

class PubgmController extends Controller
{
    public function index(){
        $teams = Pubgm::all();
        return view('admin/pubgm', ['teams' => $teams]);
    }
}