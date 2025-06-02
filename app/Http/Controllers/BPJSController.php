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

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|in:L,P',
        'telepon' => 'required',
        'bb' => 'required|numeric',
        'tb' => 'required|numeric',
    ]);

    // Tambahkan ID BPJS otomatis
    $validated['bpjs_id'] = '' . now()->format('YmdHis') . rand(100, 999);

    $pendaftar = Pendaftar::create($validated);

    return view('bpjs.form', [
        'mode' => 'daftar',
        'pendaftar' => $pendaftar,
    ]);
}
    // (Opsional) Ambil semua data pendaftar
    public function all()
    {
        $data = Pendaftar::all();
        return view('data', compact('data'));
    }

    public function hasil(Request $request)
    {
        // Validasi jika ada input id_pendaftar, boleh tidak ada
        $request->validate([
            'id_pendaftar' => 'sometimes|numeric',
        ]);

        // Render view 'bpjs.hasil'
        return view('bpjs.hasil');
    }
    
}
