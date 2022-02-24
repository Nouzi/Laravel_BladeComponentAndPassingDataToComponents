<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class PassMessageData extends Controller
{

    public function index()
    {
        $message = Message::all();
        return view('welcome', ['message' => $message] );
    }

}
