<?php

namespace App\Models\Version1;

use App\Models\Version1\ProductMasters;
use Illuminate\Database\Eloquent\Model;

class ProductStorages extends Model
{
    protected $table = 'product_storages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_masters_id',
        'first_stock',
        'last_stock',
    ];

    /**
     * Define a relationship.
     */
    public function product_masters()
    {
    	return $this->belongsTo(ProductMasters::class);
    }
}
