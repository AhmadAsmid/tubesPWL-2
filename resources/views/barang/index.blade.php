@extends('layouts.app')

@section('title', 'Kelola Barang')

@section('content')
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-success mb-3">Tambah Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
