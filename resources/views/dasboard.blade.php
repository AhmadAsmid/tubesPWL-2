<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app') <!-- Menggunakan layout yang sudah ada -->

@section('content')
    <div class="container">
        <h1>Welcome to your Dashboard</h1>
        <p>Here you can manage your transactions, view reports, and more.</p>
        
        <!-- Tampilkan informasi terkait pengguna -->
        <div>
            <h3>Hello, {{ Auth::user()->name }}!</h3>
            <p>Your role: {{ Auth::user()->role }}</p>
        </div>
    </div>
@endsection
