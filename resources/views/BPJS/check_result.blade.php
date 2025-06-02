<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Cek Data BPJS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-50 to-green-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-xl">
        <h2 class="text-2xl font-bold text-center text-green-700 mb-6">🔍 Hasil Cek Data BPJS</h2>

        <div class="space-y-4 text-gray-700">
            <div class="flex justify-between">
                <span class="font-semibold">Nama:</span>
                <span>{{ $pendaftar->nama }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold">Tanggal Lahir:</span>
                <span>{{ $pendaftar->tanggal_lahir }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold">Jenis Kelamin:</span>
                <span>{{ $pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold">Telepon:</span>
                <span>{{ $pendaftar->telepon }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold">Berat Badan:</span>
                <span>{{ $pendaftar->bb }} kg</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold">Tinggi Badan:</span>
                <span>{{ $pendaftar->tb }} cm</span>
            </div>
            <div class="flex justify-between text-green-600 font-bold">
                <span>ID BPJS:</span>
                <span>{{ $pendaftar->bpjs_id }}</span>
            </div>
        </div>

        <div class="mt-8 flex justify-center space-x-4">
            <a href="{{ url('/') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-md transition">Kembali ke Beranda</a>

            <form action="{{ route('bpjs.destroy', $pendaftar->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-md transition">
                    Hapus Data
                </button>
            </form>
        </div>
    </div>

</body>
</html>
