<?php

namespace App\Http\Controllers;

use App\Models\BarangStok;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangStokController extends Controller
{
    //
    public function index () {
      
      $data = BarangStok::all();

      return dd($data);
    }
}
