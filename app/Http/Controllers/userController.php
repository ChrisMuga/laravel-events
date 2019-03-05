<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    #index
    public function index(Request $request)
    {
        return view('users.index');
    }

    #send-message
    public function sendMessage(Request $request)
    {
        return $request;
    }
}
