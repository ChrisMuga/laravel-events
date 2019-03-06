<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class userController extends Controller
{
    #index
    public function index(Request $request)
    {
        $messages = Message::all();
        return view('users.index')->with('messages', $messages);
    }
    
    #chris
    public function chris(Request $request)
    {
        return view('users.chris');
    }

    #muga
    public function muga(Request $request)
    {
        return view('users.muga');
    }
}
