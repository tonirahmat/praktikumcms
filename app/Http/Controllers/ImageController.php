<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function create()
    {
        return view('bpjs.upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $image = Image::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return view('bpjs.upload', ['image' => $image])->with('success', 'Gambar berhasil diupload.');
    }

    public function destroy($id)
{
    $image = Image::findOrFail($id);

    // Hapus file dari penyimpanan
    if (Storage::disk('public')->exists($image->image_path)) {
        Storage::disk('public')->delete($image->image_path);
    }

    // Hapus record dari database
    $image->delete();

    return redirect()->route('bpjs.upload')->with('success', 'Gambar berhasil dihapus.');

}
public function upload(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:100',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
    ]);

    // Simpan file jika valid
    $path = $request->file('image')->store('uploads', 'public');

    $image = new ImageModel(); 
    $image->title = $request->title;
    $image->image_path = $path;
    $image->save();

    return redirect()->back()->with('success', 'Gambar berhasil diupload!')->with('image', $image);
}
}
