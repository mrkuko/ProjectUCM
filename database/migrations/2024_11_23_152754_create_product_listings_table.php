<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branch_products', function (Blueprint $table) {
            $table->id();
            // Correctly reference the branch and product_listings tables
            $table->foreignIdFor(\App\Models\Branch::class)->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('transaction_products', function (Blueprint $table) {
            $table->id();
            // Correctly reference the branch and product_listings tables
            $table->foreignId('transaction_id')->constrained('branches')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_products');
        Schema::dropIfExists('branch_products');

    }
};

