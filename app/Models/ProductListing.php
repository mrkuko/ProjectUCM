<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductListing extends Model
{
    /** @use HasFactory<\Database\Factories\ProductListingFactory> */
    use HasFactory;

    protected $table = 'product_listings';
    protected $fillable = ['amount'];

    public function products()
    {
        return $this->hasOne(Product::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }
}
