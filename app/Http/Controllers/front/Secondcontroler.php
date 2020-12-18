<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Secondcontroler extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('showstring');
    }
    public function showstring()
    {
        return "string ";
    }

    public function showstring2()
    {
        return "srtring2";
    }
}
