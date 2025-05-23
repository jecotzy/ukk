<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'category_id',
        'secondary_category_id',
        'image_url',
    ];

    /**
     * Relasi ke kategori utama (belongsTo)
     */
    public function primaryCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Relasi ke kategori sekunder (belongsTo)
     */
    public function secondaryCategory()
    {
        return $this->belongsTo(Category::class, 'secondary_category_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function imageUrlFull()
    {
        return $this->image_url ? asset('storage/' . $this->image_url) : null;
    }

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = Str::slug($product->product_name);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->product_name);
        });
    }
}

