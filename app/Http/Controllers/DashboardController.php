<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data transaksi terbaru
        $recentTransactions = Transaksi::latest()->limit(5)->get();
        
        return view('dashboard', compact('recentTransactions'));
    }
}

