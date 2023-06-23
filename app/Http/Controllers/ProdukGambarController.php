<?php

namespace App\Http\Controllers;

use App\Models\ProdukGambar;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukGambarController extends Controller
{
    //
    public function store(Request $request)
    // {
    //     $request->validate([
    //         'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $gambar = $request->file('gambar');

    //     // Menggunakan Intervention Image untuk kompresi gambar
    //     $compressedImage = Image::make($gambar)
    //         ->resize(800, null, function ($constraint) {
    //             $constraint->aspectRatio();
    //             $constraint->upsize();
    //         })
    //         ->encode('jpg', 75); // Menggunakan format JPG dengan kualitas 75

    //     $namaGambar = time() . '_' . $gambar->getClientOriginalName();
    //     $pathGambar = 'produk/' . $namaGambar;

    //     // Simpan gambar terkompresi
    //     Storage::disk('public')->put($pathGambar, $compressedImage->getEncoded());

    //     $produkGambar = new ProdukGambar;
    //     $produkGambar->produk_id = $produkId;
    //     $produkGambar->nama = $namaGambar;
    //     $produkGambar->path = $pathGambar;
    //     $produkGambar->save();

    //     return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    // }
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $namaGambar = time() . '_' . $gambar->getClientOriginalName();
        $pathGambar = $gambar->storeAs('foto-produk/semen', $namaGambar, 'public');
        // Memindahkan file ke direktori public dengan menggunakan move()
        $gambar->move(public_path('foto-produk/semen'), $namaGambar);

        $produkGambar = new ProdukGambar;
        $produkGambar->produk_id = '1';
        $produkGambar->nama = $namaGambar;
        $produkGambar->path = $pathGambar;
        $produkGambar->save();

        return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    }
}
