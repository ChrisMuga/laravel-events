<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    #send-message
    public function sendMessage(Request $request)
    {
        Message::create($request->all());
        return back();
    }
}
