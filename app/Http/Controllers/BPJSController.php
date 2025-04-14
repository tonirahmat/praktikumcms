<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BPJS;

class BPJSController extends Controller
{
    public function index()
    {
        $data = BPJS::all();
        return view('bpjs.index', ['data' => $data]);
    }

    public function show($id)
    {
        $data = BPJS::find($id);
        if ($data) {
            return view('bpjs.show', ['data' => $data]);
        } else {
            return abort(404, 'Data tidak ditemukan');
        }
    }
    public function register(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'telepon' => $request->input('telepon'),
        ];

        // Simpan ke database jika diperlukan, misalnya: BPJS::create($data);

        return view('bpjs.hasil', [
            'jenis' => 'pendaftaran',
            'data' => $data
        ]);
    }

    // Menangani pengambilan antrian
    public function antrian(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'nomor_antrian' => 'A' . rand(100, 999), // Contoh nomor antrian
        ];

        // Simpan ke database jika diperlukan

        return view('bpjs.hasil', [
            'jenis' => 'antrian',
            'data' => $data
        ]);
    }
}

