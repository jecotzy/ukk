<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    // Izinkan kolom-kolom ini untuk mass assignment
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'category_id',
        'image_url',
    ];

    /**
     * Relasi ke kategori (many to one)
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    /**
     * Accessor untuk menampilkan URL gambar secara otomatis
     */
    // HAPUS accessor getImageUrlAttribute
// ATAU ubah nama method jadi bukan accessor
public function imageUrlFull()
{
    return $this->image_url ? asset('storage/' . $this->image_url) : null;
}

}
