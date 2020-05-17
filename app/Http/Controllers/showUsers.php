<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class showUsers extends Controller
{
    public function showUsers(){
        return view('home',['usersName'=>User::all()]);
    }
}
