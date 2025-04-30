<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_name',
        'description',
    ];

    // Primary relation to products (for category_id)
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Secondary relation to products (for secondary_category_id)
    public function secondaryProducts()
    {
        return $this->hasMany(Product::class, 'secondary_category_id');
    }
}
