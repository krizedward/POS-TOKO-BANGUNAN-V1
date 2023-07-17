<?php

namespace App\Http\Controllers\API;

use App\Models\BarangStok;
use App\Models\LogBarangKeluar;
use App\Models\LogBarangMasuk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangStokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = BarangStok::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validasi data yang diterima
        // $validatedData = $request->validate([
        //   'nama' => 'required',
        //   'keterangan' => 'required',
        //   // Tambahkan validasi untuk kolom lain jika diperlukan
        // ]);

        // Simpan data ke tabel BarangSatuan
        // $barangs = new BarangSatuan;
        // $barangs->nama = $request->input('nama');
        // $barangs->keterangan = $request->input('keterangan');
        // // Set atribut lainnya jika diperlukan
        // $barangs->save();

        // Simpan data ke tabel BarangStok
        BarangStok::create([
          'barang_id' => 1,
          'stok_masuk' => 0,
          'stok_keluar' => 0,
          'total_banyak' => 0,
          'bulan_stok' => 'maret',
          'tahun_stok' => '2023',
        ]);

        // Simpan data ke tabel LogBarangMasuk
        LogBarangMasuk::create([
          'barang_id' => 1,
          'banyak' => 0,
          'waktu' => '2023-01-01',
        ]);

        // Simpan data ke tabel LogBarangKeluar
        LogBarangKeluar::create([
          'barang_id' => 1,
          'banyak' => 1,
          'waktu' => '2023-01-01',
        ]);

        // Berikan respons sukses
        return response()->json([
          'message' => 'Data berhasil disimpan',
          // 'data' => $barangs
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
          $barang = BarangStok::findOrFail($id);
  
          return response()->json([
            'message' => 'Data ditemukan',
            'data' => $barang
          ], 200);

        } catch (\Exception $e) {

          return response()->json([
            'message' => 'Data tidak ditemukan'
          ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            // $barang = BarangStok::findOrFail($id);
    
            // $validatedData = $request->validate([
            //     'nama' => 'required',
            //     'keterangan' => 'required',
            // ]);

            // BarangStok::create([
            //   'barang_id' => 1,
            //   'stok_masuk' => 0,
            //   'stok_keluar' => 0,
            //   'total_banyak' => 0,
            //   'bulan_stok' => 'maret',
            //   'tahun_stok' => '2023',
            // ]);

            BarangStok::where('id',$id)->update([
              // 'nama' => $request->nama,
              // 'slug' => Str::slug($request->nama),
              // 'deskripsi' => $request->deskripsi,
              // 'nama' => $request->nama,
              // 'slug' => Str::slug($request->nama),
              'barang_id' => 1,
              'stok_masuk' => 0,
              'stok_keluar' => 0,
              'total_banyak' => 0,
              'bulan_stok' => 'maret',
              'tahun_stok' => '2023',
            ]);
    
            // $barang->nama = $request->input('nama');
            // $barang->keterangan = $request->input('keterangan');
            // Update atribut lainnya jika diperlukan
    
            // $barang->save();
    
            return response()->json([
              'message' => 'Data berhasil diupdate',
              // 'data' => $barang
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
          // $data = BarangStok::find($id);
        	// $data->delete();
          
          $barang = BarangStok::findOrFail($id);
          $barang->delete();
          
          return response()->json([
              'message' => 'Data berhasil dihapus'
          ], 204);

        } catch (\Exception $e) {
            
          return response()->json([
            'message' => 'Data tidak ditemukan'
          ], 404);
        }
    }
}
