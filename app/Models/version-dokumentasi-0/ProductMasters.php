<?php

namespace App\Models\Version1;

use App\Models\Version1\CategoryDetail;
use App\Models\Version1\ProductStorages;
use Illuminate\Database\Eloquent\Model;

class ProductMasters extends Model
{
    protected $table = 'product_masters';

    protected $primaryKey = 'id';

    protected $fillable = [
        'category_details_id',
        'name',
        'buy_price',
        'sell_price',
        'images',
        'description',
    ];

    /**
     * Define a relationship.
     */
    public function category_details()
    {
    	return $this->belongsTo(CategoryDetail::class);
    }

    // fungsi untuk menghubungkan tabel product_storages
    public function product_storages()
    {
        return $this->hasOne(ProductStorages::class);
    }

    // custom method
    public function jumlah()
    {
        return $this->count('name');
    }
}
