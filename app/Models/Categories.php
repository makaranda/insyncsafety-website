<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
