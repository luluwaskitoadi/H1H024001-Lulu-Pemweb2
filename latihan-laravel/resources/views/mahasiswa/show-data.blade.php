@extends('layouts.app')

@section('judul', 'Detail Mahasiswa')

@section('konten')
    <h1 class="h3 mb-4">Detail Mahasiswa</h1>

    <div class="card mb-4">
        <div class="card-body">
            <p class="mb-1">NIM: <strong>{{ $mahasiswa->nim }}</strong></p>
            <p class="mb-1">Nama: <strong>{{ $mahasiswa->nama }}</strong></p>
            <p class="mb-1">Program Studi: <strong>{{ $mahasiswa->programStudi->nama }}</strong></p>
            <p class="mb-1">Angkatan: <strong>{{ $mahasiswa->angkatan }}</strong></p>
            <p class="mb-0">IPK: <strong>{{ $mahasiswa->ipk }}</strong></p>
        </div>
    </div>

    <h2 class="h5 mb-3">Matakuliah yang Diambil</h2>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa->matakuliah as $mk)
                <tr>
                    <td>{{ $mk->kode }}</td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->pivot->nilai }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum mengambil matakuliah apa pun</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('mahasiswa.data') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection