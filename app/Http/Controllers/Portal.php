<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portal extends Controller
{
    function index()
    {
        return view('portal/v_index');
    }
}
