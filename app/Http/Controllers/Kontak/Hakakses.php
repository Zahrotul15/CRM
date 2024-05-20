<?php

namespace App\Http\Controllers\Kontak;

use App\Http\Controllers\Controller;
use App\Models\Kontak\Hakaksesmodel;
use Illuminate\Http\Request;

class Hakakses extends Controller
{
    function index()
    {
        $data['ambildata'] = Hakaksesmodel::all();
        return view('kontak/hakakses/v_index', $data);
    }
}
