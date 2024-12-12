<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'street_address',
        'city',
        'state',
        'postal_code',
        'addressable_id',
        'addressable_type'
    ];

    // Polymorphic inverse relationship
    public function addressable()
    {
        return $this->morphTo();
    }
}
