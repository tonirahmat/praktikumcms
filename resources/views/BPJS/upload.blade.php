<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
            color: #333;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background-color: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #2c3e50;
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #3498db;
            border: none;
            padding: 10px 15px;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 15px;
        }

        .preview {
            text-align: center;
            margin-top: 20px;
        }

        .preview img {
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .delete-button {
            background-color: #e74c3c;
            margin-top: 10px;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .back-btn {
            margin-top: 20px;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Upload Gambar</h2>

    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <!-- Form Upload -->
    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul Gambar</label>
        <input type="text" name="title" required>

        <label>Pilih Gambar</label>
        <input type="file" name="image" required>

        <button type="submit">Upload</button>
    </form>

    <!-- Preview Gambar -->
    @if (isset($image))
        <div class="preview">
            <h3>Gambar Terbaru:</h3>
            <p><strong>{{ $image->title }}</strong></p>
            <img src="{{ asset('storage/' . $image->image_path) }}" width="250">

            <!-- Tombol Hapus -->
            <form action="{{ route('image.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Hapus Gambar</button>
            </form>
        </div>
    @endif

    <div class="back-btn">
        <a href="{{ route('index') }}">
            <button type="button">Kembali ke Menu Utama</button>
        </a>
    </div>
    {{-- Tampilkan error validasi --}}
     @if ($errors->any())
    <div style="background-color: #ffcdd2; color: #b71c1c; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
        <ul style="list-style: none; padding-left: 0; margin: 0;">
            @foreach ($errors->all() as $error)
                <li>⚠ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>
</body>
</html>
