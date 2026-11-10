<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // data kamar disimpan di sini, tidak pakai database
    private function ambilDataKamar()
    {
        return [
            ['nomor' => '101', 'lantai' => 1, 'tipe' => 'AC',      'penghuni' => 'Sari', 'harga' => 900000, 'status' => 'Lunas'],
            ['nomor' => '201', 'lantai' => 2, 'tipe' => 'Standar', 'penghuni' => 'Ira',  'harga' => 600000, 'status' => 'Belum Bayar'],
            ['nomor' => '202', 'lantai' => 2, 'tipe' => 'Standar', 'penghuni' => null,   'harga' => 600000, 'status' => 'Kosong'],
        ];
    }

    public function halamanLogin()
    {
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        $namaUser = $request->input('username');

        // nama user dibawa ke halaman beranda lewat parameter di URL
        return redirect()->route('beranda', ['username' => $namaUser]);
    }

    public function halamanBeranda(Request $request)
    {
        $namaUser = $request->query('username', 'Tamu');
        $daftarKamar = $this->ambilDataKamar();

        $totalKamar = 0;
        $kamarKosong = 0;
        $belumBayar = 0;

        foreach ($daftarKamar as $kamar) {
            $totalKamar++;

            if ($kamar['status'] == 'Kosong') {
                $kamarKosong++;
            }
            if ($kamar['status'] == 'Belum Bayar') {
                $belumBayar++;
            }
        }

        $kartuInfo = [
            ['judul' => 'Total Kamar',  'angka' => $totalKamar],
            ['judul' => 'Kamar Kosong', 'angka' => $kamarKosong],
            ['judul' => 'Belum Bayar',  'angka' => $belumBayar],
        ];

        return view('dashboard', [
            'namaUser'  => $namaUser,
            'kartuInfo' => $kartuInfo,
        ]);
    }

    public function halamanKamar(Request $request)
    {
        $namaUser = $request->query('username', 'Tamu');
        $daftarKamar = $this->ambilDataKamar();

        return view('kamar', [
            'namaUser'    => $namaUser,
            'daftarKamar' => $daftarKamar,
        ]);
    }

    public function halamanProfil(Request $request)
    {
        $namaUser = $request->query('username', 'Tamu');

        $dataKos = [
            'Nama Kos'     => 'Kos Sania',
            'Jumlah Kamar' => count($this->ambilDataKamar()),
            'Tipe Kamar'   => 'Standar dan AC',
            'Jumlah Lantai' => '2 lantai',
        ];

        return view('profile', [
            'namaUser' => $namaUser,
            'dataKos'  => $dataKos,
        ]);
    }
}