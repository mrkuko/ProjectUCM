<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory;

    protected $table = 'branches';
    protected $fillable = ['budget'];

    public function managers()
    {
        return $this->belongsToMany(User::class, 'user_branch')
            ->where('position', 'manager');
//        return $this->hasMany(User::class)->where('position', 'manager');
    }

    public function sellers()
    {
        return $this->belongsToMany(User::class)
            ->where('position', 'seller');
    }

    public function products()
    {
        return $this->hasMany(ProductListing::class, 'branch_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'branch_id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'branch_id');
    }

    public function locations()
    {
        return $this->morphMany(Location::class, 'locatable');
    }
}
