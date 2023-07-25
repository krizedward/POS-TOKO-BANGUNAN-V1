<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Produk;

class DashboardController extends Controller
{
    //
    public function index() 
    {
      // $menu = 'dashboard';
      // $total = Produk::count();
      
      // return view('dashboard',
      //   compact(
      //     'menu',
      //     'total',
      // ));
      try {
        
        $menu = 'dashboard';
        $total = 0;
        
        // return dd('dashboard');
        return view('blank', 
          compact(
            'menu',
            'total',
          ));

      } catch (\Exception $e) {

        return dd($e->getMessage());
      }
    }
}
