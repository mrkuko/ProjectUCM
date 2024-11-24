<?php

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
        Schema::create('product_listings', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('branch_product_listing', function (Blueprint $table) {
            $table->id();
            // Correctly reference the branch and product_listings tables
            $table->foreignId('branch_id')->constrained('branches')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('product_listings')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('transaction_product_listing', function (Blueprint $table) {
            $table->id();
            // Correctly reference the product_listings and transactions tables
            $table->foreignId('transaction_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('product_listings')->cascadeOnDelete();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_product_listing');
        Schema::dropIfExists('branch_product_listing');
        Schema::dropIfExists('product_listings');
    }
};

