<?php

namespace App\Models;

use App\Models\CategoriesDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'detail_categories_id',
        'name_product',
        'buy_price',
        'sell_price',
        'images_product',
        'description',
        'first_stock',
        'last_stock',
    ];

    /**
     * Define a relationship.
     */
    public function detail_categories()
    {
    	return $this->belongsTo(CategoriesDetail::class);
    }

    /**
     * Define a relationship.
     */
    // public function detail_categories()
    // {
    // 	return $this->hasMany(CategoriesDetail::class);
    // }

    public function jumlah()
    {
        return $this->count('name_product');
    }
}
