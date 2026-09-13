<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MatakuliahController extends Controller
{
    public function index(Request $request)
    {
        $daftarMatakuliah = [
            ['kode' => 'TK245001', 'nama' => 'Sistem Kendali', 'sks' => 3],
            ['kode' => 'TK245002', 'nama' => 'Keamanan Jaringan Komputer', 'sks' => 2],
            ['kode' => 'TK245004', 'nama' => 'Internet of Things', 'sks' => 3],
            ['kode' => 'TK245006', 'nama' => 'Etika Profesi', 'sks' => 2],
            ['kode' => 'TK245007', 'nama' => 'Metode Numerik', 'sks' => 2],
        ];
        $cari = $request->query('cari');
        if ($cari) {
            $daftarMatakuliah = array_filter($daftarMatakuliah, function ($mk) use ($cari) {
                return str_contains(strtolower($mk['nama']), strtolower($cari))
                    || str_contains(strtolower($mk['kode']), strtolower($cari));
            });
        }
        return view('matakuliah.index', [
            'daftarMatakuliah' => $daftarMatakuliah,
            'cari' => $cari,
        ]);
    }
    public function show(string $kode)
    {
        $daftarMatakuliah = [
            ['kode' => 'TK245001', 'nama' => 'Sistem Kendali', 'sks' => 3],
            ['kode' => 'TK245002', 'nama' => 'Keamanan Jaringan Komputer', 'sks' => 2],
            ['kode' => 'TK245004', 'nama' => 'Internet of Things', 'sks' => 3],
            ['kode' => 'TK245006', 'nama' => 'Etika Profesi', 'sks' => 2],
            ['kode' => 'TK245007', 'nama' => 'Metode Numerik', 'sks' => 2],
        ];
        $matakuliah = collect($daftarMatakuliah)->firstWhere('kode', $kode);
        return view('matakuliah.show', [
            'matakuliah' => $matakuliah,
            'kode' => $kode,
        ]);
    }
}