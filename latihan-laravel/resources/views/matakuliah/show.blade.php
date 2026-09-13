@extends('layouts.app')

@section('judul', 'Detail Matakuliah')

@section('konten')
    <h1 class="h3 mb-4">Detail Matakuliah</h1>

    @if ($matakuliah)
        <div class="card">
            <div class="card-body">
                <p class="mb-1">Kode: <strong>{{ $matakuliah['kode'] }}</strong></p>
                <p class="mb-1">Nama: <strong>{{ $matakuliah['nama'] }}</strong></p>
                <p class="mb-0">SKS: <x-badge-sks :sks="$matakuliah['sks']" /></p>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            Matakuliah dengan kode <strong>{{ $kode }}</strong> tidak ditemukan.
        </div>
    @endif

    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection