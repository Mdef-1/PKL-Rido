<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillables = [
        'nama',
        'slug',
        'harga',
        'deskripsi',
        'gambar',
        'stok',
        'category_id',
    ];
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function orderProduct(){
        return $this->hasMany(OrderProduct::class, 'product_id');
    }
}
