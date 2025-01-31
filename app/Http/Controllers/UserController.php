<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($user) 
    {
        dd($user);
        return view('user')->with(['user' => $user]);
    }
}
