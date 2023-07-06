<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class DashboardController extends Controller
{
    //
    public function index() 
    {
      $menu = 'dashboard';
      $total = Produk::count();
      
      return view('dashboard',
        compact(
          'menu',
          'total',
      ));
    }
}
