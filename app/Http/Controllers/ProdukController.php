<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Support\Str;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProdukController extends Controller
{
    //
    public function index(): View
    { // menampilkan data yang ada di kategori_produk
      try {
      	// testing data
      	$data = Produk::all();
        $menu = 'produk';
      	// $data = KategoriProduk::all();
      	// dd($index);
      	return view('produk.index', compact('data','menu'));
      } catch (\Exception $e) {
        // Tangani exception yang terjadi
        // $result = null;
        dd($e->getMessage());
		  }
    }

    public function create(): View
    { // menampilkan form data yang ada di kategori_produk
        try {
        	// testing data
        	// dd($create);
          $menu = 'produk';
        	return view('produk.create', compact('menu'));

        } catch (\Exception $e) {
        	// Tangani exception yang terjadi
        	dd($e->getMessage());

        }
    }

    public function store(Request $request): RedirectResponse
    { // menyimpan data form yang ada di kategori_produk
        try {
        	// validasi data form
        	// $request->validate([
	        //     'nama' => 'required|min:1',
	        //     'deskripsi' => 'required|min:10',
	        // ]);
	        
	        // menyimpan data
	        Produk::create([
	        	// old
            // 'kode_id' => "KP",
            // 'kode_nomor' => Str::padLeft(mt_rand(1, 99999), 5, '0'),
            // 'nama' => $request->nama,
            // 'slug' => Str::slug($request->nama),
            // 'deskripsi' => $request->deskripsi,
            // new
            // 'nama_produk' => $request->data,
            // 'deskripsi' => $request->deskripsi,
            // 'harga' => $request->harga,
            // 'stok' => $request->stok,
            // 'stok_minimum' => $request->stok_minimum,
            // 'kategori' => $request->kategori,
            // 'supplier' => $request->supplier,
            // 'tanggal_pembelian_terakhir' => $request->tanggal_pembelian_terakhir,
            // 'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            // new
            'nama' => $request->nama,
            'modal' => $request->modal,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal_masuk,
	        ]);

	        // kembali ke halaman
	        // return redirect()->route('kategori.suplier.index')
	        //                 ->with('success','Product created successfully.');
          
          Alert::success('Success', 'Telah Berhasil Menambahkan Data Produk.');

          return Redirect::route('produk.index');

        } catch (\Exception $e) {
        	// Tangani exception yang terjadi
        	dd($e->getMessage());

        }
    }

    public function show(Produk $id): View
    { // menampilkan data berdasarkan id yang ada di kategori_produk
        try {
        	// testing data
        	// $show = 'Kategori Produk Show Form '.$id;
        	// dd($show);
        	$data = Produk::find($id);
          $menu = 'produk';
        	return view('produk.show', compact('data','menu'));

        } catch (\Exception $e) {
        	// Tangani exception yang terjadi
        	dd($e->getMessage());
        }
    }

    public function edit(Produk $id): View
    { // menampilkan form edit data yang ada di kategori_produk
    	try {
    		// testing data
    		// $edit = 'Kategori Produk Edit'.$id;
    		// dd($edit);

    		$data = Produk::find($id);
        $menu = 'produk';
        return view('produk.edit', compact('data','menu'));

    	} catch (\Exception $e) {
    		// Tangani exception yang terjadi
        	dd($e->getMessage());
    	
    	}
    }

    public function update(Request $request, $id): RedirectResponse
    { // menyimpan data form edit yang ada di kategori_produk
    	try {

	        // $this->validate($request, [
	        //   'nama' => 'required',
	        //   'deskripsi' => 'required',
	        // ]);

	        Produk::where('id',$id)->update([
            // 'nama' => $request->nama,
				    // 'slug' => Str::slug($request->nama),
				    // 'deskripsi' => $request->deskripsi,
            'nama' => $request->nama,
            'modal' => $request->modal,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal_masuk,
          ]);
	        
	        // kembali ke halaman
	        // return redirect()->route('kategori.suplier.index')
	        //                 ->with('success','Product created successfully.');
          
          Alert::success('Success', 'Telah Berhasil Mengubah Data Produk.');

          return Redirect::route('produk.index');


    	} catch (\Exception $e) {
    		// Tangani exception yang terjadi
        	dd($e->getMessage());	
    	}
    }

    public function destroy($id): RedirectResponse
    { // menghapus data
    	try {
    		//testing data
    		// $destroy = 'Kategori Destroy';
    		// dd('destroy');

    		// $data->delete();

    		  $data = Produk::find($id);
        	$data->delete();

	        // return redirect()->route('kategori.suplier.index')
	        //                 ->with('success','Product deleted successfully');

          Alert::success('Success', 'Telah Berhasil Menghapus Data Produk.');

          return Redirect::route('produk.index');

    	} catch (\Exception $e) {
    		// Tangani excption yang terjadi
    		dd($e->getMessage());

    	}  
    }
    
}