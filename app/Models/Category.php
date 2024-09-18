<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'cover_image'];

    // Relação com produtos
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }
}
