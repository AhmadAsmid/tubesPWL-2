@extends('layouts.app')

@section('title', 'Laporan Transaksi')

@section('content')
    <h1>Laporan Transaksi</h1>
    <form method="GET" action="{{ route('laporan.generate') }}">
        <div class="row">
            <div class="col-md-5">
                <label for="start_date" class="form-label">Dari Tanggal</label>
                <input type="date" name="start_date" id="start_date" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="end_date" class="form-label">Sampai Tanggal</label>
                <input type="date" name="end_date" id="end_date" class="form-control" required>
            </div>
            <div class="col-md-2 mt-4">
                <button type="submit" class="btn btn-primary">Generate</button>
            </div>
        </div>
    </form>
@endsection
