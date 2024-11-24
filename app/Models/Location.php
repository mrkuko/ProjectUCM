<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['location_type', 'location_id'];

    public function locatable()
    {
        return $this->morphTo();
    }
}
