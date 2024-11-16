<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sub_categories';
    protected $fillable = [
        'name',
        'status',
    ];
}
