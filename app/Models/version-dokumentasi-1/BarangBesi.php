<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangBesi extends Model
{
    protected $table = 'barang_besi';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ukuran',
        'lonjor',
        'harga',
    ];
}
