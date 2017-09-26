<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampil extends Controller
{
    public function index()
    {
        return view('content');
    }
}
