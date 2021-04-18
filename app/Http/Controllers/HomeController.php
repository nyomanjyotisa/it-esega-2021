<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function message(Request $request){
        $messages = new Message;

        $messages->name = $request->name;
        $messages->email = $request->email;
        $messages->subject = $request->subject;
        $messages->message = $request->message;
        $messages->save();

        return redirect('/');
    }
}
