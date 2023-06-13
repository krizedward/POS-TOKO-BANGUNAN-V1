<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\KategoriProduk;

class KategoriIndexTest extends TestCase
{
	// use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetAllKategori(): void
	{
	   $response = $this->get('/api/kategori-produk');

	   $response->assertStatus(200);
	}

	public function testEdward()
    {
        $data = [
            'nama' => 'John Edward',
            'deskripsi' => 'apa saja apa saja apa saja apa saja',
        ];

        $response = $this->post('/api/kategori-produk', $data);

        $response->assertStatus(201);
        // $response->assertStatus(302); untuk website tidak bisa temukan halaman
        // menghapus data
        $this->assertDatabaseHas('kategori_produk', $data);

     //    $response = $this->get('/api/kategori-produk');

	   	// $response->assertStatus(200);
    }
}
