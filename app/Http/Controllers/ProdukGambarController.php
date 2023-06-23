<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukGambar;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProdukGambarController extends Controller
{
    //
    public function store(Request $request)
    {
        // menyimpan data gambar di folder dan
        // menamakan nama folder berdasarkan kategori
        // kategori dari barang tersebut di simpan
        // di $namafile
        $namafile = 'semen';
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $idProduk = Produk::latest()->first();

        $gambar = $request->file('gambar');
        $namaGambar = time() . '_' . $gambar->getClientOriginalName();
        $pathGambar = $gambar->storeAs('foto-produk/semen', $namaGambar, 'public');

        $compressedImage = Image::make($gambar)
            // ->fit(500, 500, function ($constraint) {
            //     $constraint->aspectRatio();
            //     $constraint->upsize();
            // })
            ->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->encode('jpg', 75)
            ->save(public_path('foto-produk/'.$namafile.'/' . $namaGambar));

        $produkGambar = new ProdukGambar;
        $produkGambar->produk_id = $idProduk->id;
        $produkGambar->nama = $namaGambar;
        $produkGambar->path = $pathGambar;
        $produkGambar->save();

        Alert::success('Success', 'Telah Berhasil Menambahkan Data Produk.');
        return Redirect::route('produk.index');
        // Alert::success('Success', 'Berhasil Mengupload Gambar.')->autoclose(3000);
        // return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    } // berhasil
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
    // {
    //     $request->validate([
    //         'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $gambar = $request->file('gambar');
    //     $namaGambar = time() . '_' . $gambar->getClientOriginalName();
    //     $pathGambar = $gambar->storeAs('foto-produk/semen', $namaGambar, 'public');
    //     $compressedImage = Image::make($gambar)
    //         ->resize(800, null, function ($constraint) {
    //             $constraint->aspectRatio();
    //             $constraint->upsize();
    //         })
    //         ->encode('jpg', 75);
    //     // Image::make($gambar)->save($namaGambar, 40);
    //     // Memindahkan file ke direktori public dengan menggunakan move()
    //     $gambar->move(public_path('foto-produk/semen'), $namaGambar);

    //     $produkGambar = new ProdukGambar;
    //     $produkGambar->produk_id = '1';
    //     $produkGambar->nama = $namaGambar;
    //     $produkGambar->path = $pathGambar;
    //     $produkGambar->save();

    //     return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    // }
}