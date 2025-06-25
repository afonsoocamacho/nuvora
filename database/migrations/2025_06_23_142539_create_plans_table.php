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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();             // for URL use
            $table->text('description')->nullable();
            $table->json('features')->nullable();

            $table->boolean('is_visible')->default(true); // hide from public if needed
            $table->boolean('is_default')->default(false);


            $table->timestamps();
        });

        Schema::create('plan_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');

            $table->enum('billing_cycle', ['monthly', 'yearly']);
            $table->decimal('price', 8, 2); // Price in the smallest unit (e.g., cents for USD)
            $table->foreignId('currency_id')->nullable()->constrained()->nullOnDelete();

            $table->timestamps();

            $table->unique(['plan_id', 'billing_cycle']); // Only one price per billing cycle per plan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
        Schema::dropIfExists('plan_prices');
    }
};
