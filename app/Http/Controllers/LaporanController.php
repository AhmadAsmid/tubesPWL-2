<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        // Logika di sini, misalnya mengembalikan view laporan
        return view('laporan.index');
    }
}
