<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;


abstract class Controller
{
    public function index()
    {
        return view('laporan.index');
    }
}

