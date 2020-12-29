<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class secandConrollar extends Controller
{
    public function  Cnstruct(){
         $this->middleware('auth');

    }


    public function showstring1()
    {

        return ("static string1");
    }

    public function showstring2()
    {
        return ("static string2");
    }


    public function showstring3()
    {
        return ("static string3");
    }
}




