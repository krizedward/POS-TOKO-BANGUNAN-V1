<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index () {
        
        $data = Barang::all();

        return dd($data);
    }
}
