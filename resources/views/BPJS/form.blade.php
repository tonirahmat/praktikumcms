<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran BPJS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-blue-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-xl">
        <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">✅ Pendaftaran BPJS Berhasil!</h2>

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
            <div class="flex justify-between text-blue-600 font-bold">
                <span>ID BPJS:</span>
                <span>{{ $pendaftar->bpjs_id }}</span>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md transition">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>
