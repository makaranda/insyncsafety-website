<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
        'product_code',
        'dbl_retail',
        'dbl_wholesale',
        'remarks',
        'country',
        'brand',
        'status',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function subCategories()
    {
        return $this->belongsTo(SubCategories::class);
    }
}
