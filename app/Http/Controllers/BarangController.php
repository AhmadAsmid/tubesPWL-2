<?php

namespace App\Http\Controllers;

use App\Models\Barang;  // Pastikan Anda sudah membuat model Barang
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel barang
        $barangs = Barang::all();

        // Mengirim data barang ke tampilan (Blade view)
        return view('barang.index', compact('barangs'));
    }
}
