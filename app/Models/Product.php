<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['image_url', 'name', 'price'];

    //TODO
    public function productListings()
    {
        return $this->belongsToMany(ProductListing::class);
    }
}
