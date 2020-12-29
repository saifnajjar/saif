<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class UserControllar extends Controller
{
    public function ShowAdminName()
    {
        return "hi saif";


    }

    public function getindix()
    {

$data=[];
        return view('welcome',compact("data"));


    }
}
