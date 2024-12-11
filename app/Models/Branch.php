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

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_branch')
            ->withPivot('position');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'branch_products')
            ->withPivot('amount', 'created_at', 'updated_at');
    }

    /*
        $branch = Branch::find(1);
        foreach ($branch->products as $product) {
            echo "Product: {$product->name}, Amount: {$product->pivot->amount}\n";
        }

        // Attach a product with an amount
        $branch->products()->attach($product->id, ['amount' => 100]);

        // Update the amount for an existing product
        $branch->products()->updateExistingPivot($product->id, ['amount' => 200]);
     */

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
