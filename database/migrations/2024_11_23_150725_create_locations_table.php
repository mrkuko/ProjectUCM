<?php

use App\Models\Customer;
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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class)->nullable()->constrained();
            $table->foreignIdFor(\App\Models\Branch::class)->nullable()->constrained();
            $table->timestamps();
        });

        Schema::create('branch_location', function (Blueprint $table) {
            $table->id();
            // Create a constrain and then if referenced item is deleted, delete this as well
            $table->foreignIdFor(\App\Models\Branch::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Location::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('customer_location', function (Blueprint $table) {
            $table->id();
            // Create a constrain and then if referenced item is deleted, delete this as well
            $table->foreignIdFor(\App\Models\Customer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Location::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('branch_location');
    }
};
