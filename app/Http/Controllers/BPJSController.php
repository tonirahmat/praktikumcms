<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\BPJS;

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

public function formCekPendaftar()
{
    // Mengirim view awal form cek
    return view('bpjs.cek');
}

public function cekPendaftar(Request $request)
{
    // Validasi input
    $request->validate([
        'id_pendaftar' => 'required|integer'
    ]);

    try {
        // Cari data pendaftar berdasarkan ID
        $data = Pendaftar::findOrFail($request->id_pendaftar);

        // Kirim data ke view
        return view('bpjs.cek', compact('data'));
    } catch (ModelNotFoundException $e) {
        // Redirect balik ke form kalau tidak ditemukan
        return redirect()
            ->route('form.cek.pendaftar')
            ->withInput()
            ->withErrors('Pendaftar tidak ditemukan!');
    }
}

public function destroy($id)
{
    $pendaftar = Pendaftar::findOrFail($id);
    $pendaftar->delete();

    return redirect()->route('form.cek.pendaftar')->with('success', 'Data berhasil dihapus.');
}


}
