<?php

namespace App\Http\Controllers\API;

use App\Models\TemporderBarang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemporderBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = TemporderBarang::all();

        return response()->json([
          'status' => 200,
          'status_message' => 'sukses',
          'message' => 'Data berhasil ditampilkan',
          'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
