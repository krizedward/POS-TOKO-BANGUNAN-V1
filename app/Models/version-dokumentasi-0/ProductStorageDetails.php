<?php

namespace App\Models\Version1;

use Illuminate\Database\Eloquent\Model;

class ProductStorageDetails extends Model
{
    protected $table = 'product_storage_details';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_storages_id',
        'product_stock',
        'status',
    ];
}
