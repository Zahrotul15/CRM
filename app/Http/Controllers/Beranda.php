<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    function index()
    {
        return view('beranda/v_index');
    }
}
