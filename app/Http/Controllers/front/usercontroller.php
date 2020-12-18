<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //

    public function getindex()
    {
        return view('welcome');
    }
}
