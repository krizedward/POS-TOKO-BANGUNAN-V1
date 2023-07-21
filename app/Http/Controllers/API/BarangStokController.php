<?php

namespace App\Http\Controllers\API;

use App\Models\BarangStok;
use App\Models\BarangTotalStok;
use App\Models\LogBarangKeluar;
use App\Models\LogBarangMasuk;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangStokController extends Controller
{
    /**
     * Display a listing of the resource.
     * barang_total 
     * barang_id
     * bulan
     * tahun
     * ket_barang (lokasi)
     */
    public function index()
    {
        // data yang ingin ditampilkan
        // $data = BarangStok::all();
        $data = BarangStok::take(5)->get();

        // variable
        $namaBarangArray = [];

        foreach ($data as $item) {
          $namaBarangArray[] = [
            'nama' => $item->barang->nama,
            'stok_masuk' => $item->stok_masuk,
            'stok_keluar' => $item->stok_keluar,
            'bulan_stok' => $item->bulan_stok,
            'tahun_stok' => $item->tahun_stok,
            'created_at' => $item->barang->created_at,
            'update_at' => $item->barang->updated_at,
          ];
        }

        // Berikan respons terhadap respon diatas
        return response()->json([
          'status' => 200,
          'status_message' => 'sukses',
          'message' => 'Data berhasil ditampilkan',
          'data' => $namaBarangArray,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try {

        $validator = Validator::make($request->all(), [
          'barang_id' => 'required',
          'banyak' => 'required',
          'status' => 'required',
          // Tambahkan aturan validasi lain sesuai kebutuhan
        ]); // validasi
  
        if ($validator->fails()) 
        {
          
          return response()->json([
            'status' => 'error',
            'message' => 'Data yang diterima tidak valid.',
            'errors' => $validator->errors(),
          ], 422);
  
        } else {

          $id = $request->barang_id;
          $statusBarang = $request->status;
          $banyakBarang = $request->banyak;
          // tanggal 
          $tanggal  = now();
          // Memecahkan tanggal menjadi bagian-bagian (tahun, bulan, hari)
          $tanggalArray = explode('-', $tanggal);
          $tahun = $tanggalArray[0];
          $bulan = $tanggalArray[1];
          $hari = $tanggalArray[2];
          // Mendapatkan nama bulan dalam bentuk string
          $namaBulan = date("F", strtotime($tanggal));

          if ($statusBarang ==  'masuk') 
          {
            LogBarangMasuk::create([
              'barang_id' => $request->barang_id,
              'banyak' => $request->banyak,
              'waktu' => $tanggal,
            ]);

            BarangTotalStok::create([
              'barang_id' => $request->barang_id,
            ]);

            $barangStok = BarangStok::where('barang_id', $id)->first();
            $barangMasuk = LogBarangMasuk::latest()->first();
            $jumlahMasukSebelumnya = LogBarangMasuk::where('barang_id', $id)->sum('banyak');
            
            BarangStok::where('barang_id',$id)->update([
              'stok_masuk' => $barangStok->stok_masuk + $banyakBarang,
            ]);

            BarangTotalStok::where('barang_id',$id)->update([
              'total_banyak' => $barangStok->total_banyak + $banyakBarang,
              'bulan_stok' => $namaBulan,
              'tahun_stok' => $tahun,
            ]);

            $barangStok = BarangStok::where('barang_id', $id)->first();

            $data = [
              'nama' => $barangStok->barang->nama,
              'stok_masuk' => $barangStok->stok_masuk,
              'stok_keluar' => $barangStok->stok_keluar,
              'total_banyak' => $barangStok->total_banyak,
              'bulan_stok' => $barangStok->bulan_stok,
              'tahun_stok' => $barangStok->tahun_stok,
              'barang_keluar' => [
                'banyak' => $barangMasuk->banyak,
                'waktu' => $barangMasuk->waktu,
              ]
            ];

          } // memasukan data barang masuk

          if ($statusBarang ==  'keluar')
          {
            LogBarangKeluar::create([
              'barang_id' => $request->barang_id,
              'banyak' => $request->banyak,
              'waktu' => $tanggal,
            ]);

            BarangTotalStok::create([
              'barang_id' => $request->barang_id,
            ]);

            $barangStok = BarangStok::where('barang_id', $id)->first();
            $barangKeluar = LogBarangKeluar::latest()->first();
            $jumlahMasukSebelumnya = LogBarangMasuk::where('barang_id', $id)->sum('banyak');
            
            BarangStok::where('barang_id',$id)->update([
              'stok_keluar' => $barangStok->stok_keluar + $banyakBarang,
              'total_banyak' => $barangStok->total_banyak - $banyakBarang,
              'bulan_stok' => $namaBulan,
              'tahun_stok' => $tahun,
            ]);

            BarangTotalStok::where('barang_id',$id)->update([
              'total_banyak' => $barangStok->total_banyak + $banyakBarang,
              'bulan_stok' => $namaBulan,
              'tahun_stok' => $tahun,
            ]);

            $barangStok = BarangStok::where('barang_id', $id)->first();

            $data = [
              'nama' => $barangStok->barang->nama,
              'stok_masuk' => $barangStok->stok_masuk,
              'stok_keluar' => $barangStok->stok_keluar,
              'total_banyak' => $barangStok->total_banyak,
              'bulan_stok' => $barangStok->bulan_stok,
              'tahun_stok' => $barangStok->tahun_stok,
              'barang_keluar' => [
                'banyak' => $barangKeluar->banyak,
                'waktu' => $barangKeluar->waktu,
              ]
            ];
          } // memasukan data barang keluar

          // Berikan respons sukses
          return response()->json([
            'status' => 201,
            'status_message' => 'sukses',
            'message' => 'Data berhasil disimpan',
            'data' => $data,
          ], 201);
  
        }

      } catch (\Exception $e) {

        // Tangani exception yang terjadi
        return response()->json([
          'status' => 'error',
          'message' => 'Gagal menyimpan data',
          'error' => $e->getMessage()
        ], 500);

      } 
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
