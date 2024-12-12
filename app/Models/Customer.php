<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = ['image_url', 'name'];

    public function addresses()
    {
        return $this->morphMany(Location::class, 'addressable');
    }
}
