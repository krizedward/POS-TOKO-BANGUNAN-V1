<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriProduk;
use Illuminate\Support\Str;

class KategoriProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Next Step
     * php artisan make:factory KategoriProduk
     * Happy Coding :)
     */
    public function run(): void
    {
        // membuat data
        // KategoriProduk::factory()->count(10)->create();
        // $datas = array(
        //     array('name' => 'Alat Angkut Barang'),
        //     array('name' => 'Alat Keselamatan'),
        //     array('name' => 'Alat Perkebunan'),
        //     array('name' => 'Alat Ukur Industri'),
        //     array('name' => 'Baut & Mur Pengencang'),
        //     array('name' => 'Cat & Perlengkapan'),
        //     array('name' => 'Generator & Genset'),
        //     array('name' => 'Gerobak'),
        //     array('name' => 'HandsTools'),
        //     array('name' => 'Ledeng'),
        //     array('name' => 'Machinery'),
        //     array('name' => 'Material Bangunan'),
        //     array('name' => 'Mesin Produksi'),
        //     array('name' => 'Motor & Power Transmission'),
        //     array('name' => 'Otomasi Industrial'),
        //     array('name' => 'Perlengkapan Las'),
        //     array('name' => 'Perlengkapan Listrik'),
        //     array('name' => 'Pneumatic'),
        //     array('name' => 'Power Tools'),
        //     array('name' => 'Tape & Sealant Perekat'),
        //     array('name' => 'Tenaga Surya'),
        // );

        // foreach ($datas as $data) {
        //     KategoriProduk::create([
        //     //  'id' => $data['id'],
        //      'kode_id' => 'KP',
        //      'nama' => $data['name'],
        //      'slug' => Str::slug($data['name']),
        //    ]);
        // }

        $datas = array(
            array('ctid' => '1' , 'name' => 'Tangga Lipat'),
            array('ctid' => '1' , 'name' => 'Trolley'),
            array('ctid' => '1' , 'name' => 'Roda Kastor'),
            array('ctid' => '1' , 'name' => 'Katrol'),
            array('ctid' => '1' , 'name' => 'Tali Kawat'),
            array('ctid' => '1' , 'name' => 'Krat Plastik'),
            array('ctid' => '1' , 'name' => 'Stacker'),
            array('ctid' => '1' , 'name' => 'Chain Block'),
            array('ctid' => '2' , 'name' => 'Safety Boots'),
            array('ctid' => '2' , 'name' => 'Safety Mask'),
            array('ctid' => '2' , 'name' => 'Safety Glove'),
            array('ctid' => '2' , 'name' => 'Safety Glasses'),
            array('ctid' => '2' , 'name' => 'Pemadam Api'),
            array('ctid' => '2' , 'name' => 'Wearpack'),
            array('ctid' => '2' , 'name' => 'Safty Helmet'),
            array('ctid' => '2' , 'name' => 'Topeng Helm Las'),
            array('ctid' => '2' , 'name' => 'Safty Belt'),
            array('ctid' => '2' , 'name' => 'Rompi Proyek'),
            array('ctid' => '2' , 'name' => 'Safety Cone'),
            array('ctid' => '2' , 'name' => 'Pita Pembatas Barikade'),
            array('ctid' => '2' , 'name' => 'Ear Protector'),
            array('ctid' => '3' , 'name' => 'Alat Semprot Hama'),
            array('ctid' => '3' , 'name' => 'Pisau Sabit'),
            array('ctid' => '3' , 'name' => 'Mesin Foggin'),
            array('ctid' => '3' , 'name' => 'Mesin Blower'),
            array('ctid' => '3' , 'name' => 'Mesin Traktor'),
            array('ctid' => '3' , 'name' => 'Sprinkler'),
            array('ctid' => '3' , 'name' => 'Cangkul'),
            array('ctid' => '3' , 'name' => 'Sekop'),
            array('ctid' => '4' , 'name' => 'Pengukur Dimensi'),
            array('ctid' => '4' , 'name' => 'Pengukur Arus Listrik'),
            array('ctid' => '4' , 'name' => 'Pengukur Temperatur'),
            array('ctid' => '4' , 'name' => 'Pengukur Tekanan'),
            array('ctid' => '4' , 'name' => 'Pengukur Berat'),
            array('ctid' => '4' , 'name' => 'Pengukur Arus Air'),
            array('ctid' => '4' , 'name' => 'Pengukur Kualitas Udara'),
            array('ctid' => '5' , 'name' => 'Baut'),
            array('ctid' => '5' , 'name' => 'Skrup'),
            array('ctid' => '5' , 'name' => 'Mur'),
            array('ctid' => '5' , 'name' => 'Rivet'),
            array('ctid' => '5' , 'name' => 'Ringplat'),
            array('ctid' => '5' , 'name' => 'Hook'),
            array('ctid' => '6' , 'name' => 'Wallpaper'),
            array('ctid' => '6' , 'name' => 'Cat Pelapis'),
            array('ctid' => '6' , 'name' => 'Cat Tembok'),
            array('ctid' => '6' , 'name' => 'Cat Semprot'),
            array('ctid' => '6' , 'name' => 'Cat Kayu'),
            array('ctid' => '6' , 'name' => 'Kuas Cat'),
            array('ctid' => '6' , 'name' => 'Roller Cat'),
            array('ctid' => '6' , 'name' => 'Thinner'),
            array('ctid' => '7' , 'name' => 'Generator'),
            array('ctid' => '7' , 'name' => 'Genset'),
            array('ctid' => '8' , 'name' => 'Gerobak'),
            array('ctid' => '9' , 'name' => 'Tool Kit Set'),
            array('ctid' => '9' , 'name' => 'Obeng'),
            array('ctid' => '9' , 'name' => 'Kunci Shock'),
            array('ctid' => '9' , 'name' => 'Gergaji'),
            array('ctid' => '9' , 'name' => 'Alat Penjepit'),
            array('ctid' => '9' , 'name' => 'Kunci Ring Pas'),
            array('ctid' => '9' , 'name' => 'Kunci L'),
            array('ctid' => '9' , 'name' => 'Blow Tourch'),
            array('ctid' => '9' , 'name' => 'Palu'),
            array('ctid' => '9' , 'name' => 'Tang Potong'),
            array('ctid' => '9' , 'name' => 'Treker'),
            array('ctid' => '9' , 'name' => 'Mata Obeng'),
            array('ctid' => '9' , 'name' => 'Tang Crimping'),
            array('ctid' => '9' , 'name' => 'Kunci Inggirs'),
            array('ctid' => '9' , 'name' => 'Staples Gun'),
            array('ctid' => '9' , 'name' => 'Kunci T'),
            array('ctid' => '9' , 'name' => 'Amplas'),
            array('ctid' => '9' , 'name' => 'Sendok Semen'),
            array('ctid' => '9' , 'name' => 'Gunting Pipa'),
            array('ctid' => '9' , 'name' => 'Kapak'),
            array('ctid' => '10' , 'name' => 'Keran Air'),
            array('ctid' => '10' , 'name' => 'Pompa Air'),
            array('ctid' => '10' , 'name' => 'Filter Keran Air'),
            array('ctid' => '10' , 'name' => 'Kepala Shower Mandi'),
            array('ctid' => '10' , 'name' => 'Fitting Pipia'),
            array('ctid' => '10' , 'name' => 'Water Heater'),
            array('ctid' => '10' , 'name' => 'Washtafel'),
            array('ctid' => '10' , 'name' => 'Kloset'),
            array('ctid' => '10' , 'name' => 'Pipa PVC'),
            array('ctid' => '10' , 'name' => 'Pembersih Saluran Air'),
            array('ctid' => '10' , 'name' => 'Toren Air'),
            array('ctid' => '10' , 'name' => 'Saringan Got'),
            array('ctid' => '10' , 'name' => 'Jet Shower Toilet'),
            array('ctid' => '10' , 'name' => 'Selang Shower'),
            array('ctid' => '10' , 'name' => 'Foot Valve Klep'),
            array('ctid' => '10' , 'name' => 'Tiang Shower'),
            array('ctid' => '10' , 'name' => 'Bath Tub'),
            array('ctid' => '10' , 'name' => 'Lem Pipa'),
            array('ctid' => '10' , 'name' => 'Shower Holder'),
            array('ctid' => '11' , 'name' => 'Mesin Bubut'),
            array('ctid' => '11' , 'name' => 'Mesin Milling'),
            array('ctid' => '11' , 'name' => 'Mesin Bandsaw'),
            array('ctid' => '11' , 'name' => 'Mesin Bending'),
            array('ctid' => '12' , 'name' => 'Pintu'),
            array('ctid' => '12' , 'name' => 'Lantai'),
            array('ctid' => '12' , 'name' => 'Besi'),
            array('ctid' => '12' , 'name' => 'Gagang Pintu'),
            array('ctid' => '12' , 'name' => 'Kayu'),
            array('ctid' => '12' , 'name' => 'Genteng'),
            array('ctid' => '12' , 'name' => 'Granit'),
            array('ctid' => '12' , 'name' => 'Baja'),
            array('ctid' => '12' , 'name' => 'Kawat'),
            array('ctid' => '12' , 'name' => 'Kaca'),
            array('ctid' => '12' , 'name' => 'Engsel'),
            array('ctid' => '12' , 'name' => 'Semen'),
            array('ctid' => '12' , 'name' => 'Triplek'),
            array('ctid' => '12' , 'name' => 'Jendela'),
            array('ctid' => '12' , 'name' => 'Beton'),
            array('ctid' => '12' , 'name' => 'Batu'),
            array('ctid' => '12' , 'name' => 'Grendel'),
            array('ctid' => '12' , 'name' => 'Batu Bata'),
            array('ctid' => '12' , 'name' => 'Batako'),
            array('ctid' => '12' , 'name' => 'Pasir'),
            array('ctid' => '13' , 'name' => 'Mesin'),
            array('ctid' => '14' , 'name' => 'Motor Listrik'),
            array('ctid' => '14' , 'name' => 'Motor Starter'),
        );
            
        foreach ($datas as $data) {
            KategoriProduk::create([
                //'kode_id',
                'kategori_umum_id' => $data['ctid'],
                'nama' => $data['name'],
                'slug' => Str::slug($data['name']),
            ]);
        }
    }
}
