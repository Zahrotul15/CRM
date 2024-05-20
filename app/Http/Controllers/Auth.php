<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    function __construct()
    {
        
    }

    function index()
    {
        return view('auth/v_index');
    }

    function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
