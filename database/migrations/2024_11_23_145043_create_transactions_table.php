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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Location::class, 'from_location_id');
            $table->foreignIdFor(\App\Models\Location::class, 'to_location_id');
            $table->foreignIdFor(\App\Models\User::class, 'by_user_id');
            $table->timestamps();
        });

        Schema::create('branch_transaction', function (Blueprint $table) {
            $table->id();
            // Create a constrain and then if referenced item is deleted, delete this as well
            $table->foreignIdFor(\App\Models\Branch::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Transaction::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('branch_transaction');

    }
};
