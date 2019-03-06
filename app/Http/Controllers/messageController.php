<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\sendMessage;
use App\Message;

class MessageController extends Controller
{
    #send-message
    public function sendMessage(Request $request)
    {
        $msg = Message::create($request->all());
        event(new sendMessage($msg));
        return back();
    }
}
