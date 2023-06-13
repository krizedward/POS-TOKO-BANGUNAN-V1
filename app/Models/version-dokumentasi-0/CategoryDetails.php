<?php

namespace App\Models\Version1;

use App\Models\Version1\Categories;
use Illuminate\Database\Eloquent\Model;

class CategoryDetails extends Model
{
    protected $table = 'category_details';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Define a relationship.
     */
    public function categories()
    {
    	return $this->belongsTo(Categories::class);
    }
}
