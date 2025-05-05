<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class BPJSController extends Controller
{
    // Halaman utama
    public function index()
    {
        return view('BPJS.index');
    }

    // Tampilkan form: daftar atau cek
    public function show(Request $request)
    {
        $mode = $request->query('mode'); // 'daftar' atau 'cek'
        $data = null;

        if ($mode === 'cek' && $request->has('id_pendaftar')) {
            $id = $request->input('id_pendaftar');
            $data = Pendaftar::find($id);
        }

        return view('BPJS.show', compact('mode', 'data'));
    }

    // Simpan data pendaftaran
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'telepon' => 'required|string|max:20',
            'bb' => 'required|numeric',
            'tb' => 'required|numeric',
        ]);

        $pendaftar = Pendaftar::create($validated);

        // Generate bpjs_id: contoh sederhana
        $pendaftar->bpjs_id = 'BPJS' . str_pad($pendaftar->id, 6, '0', STR_PAD_LEFT);
        $pendaftar->save();

        $mode = 'daftar';

        return view('show', compact('pendaftar', 'mode'));
    }

    // (Opsional) Ambil semua data pendaftar
    public function all()
    {
        $data = Pendaftar::all();
        return view('data', compact('data'));
    }
}
