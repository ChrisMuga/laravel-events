<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    #fillable
    protected $fillable = [
        'to',
        'from',
        'title',
        'msg',
    ];
}
