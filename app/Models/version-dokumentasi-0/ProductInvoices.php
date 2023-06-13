<?php

namespace App\Models\Version1;

use App\Models\Version1\ProductStorages;
use Illuminate\Database\Eloquent\Model;

class ProductInvoices extends Model
{
    protected $table = 'product_invoices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_invoices_id',
        'quantity',
        'date_send',
        'description',
    ];

    /**
     * Define a relationship.
     */
    public function product_storages()
    {
    	return $this->belongsTo(ProductStorages::class);
    }
}
