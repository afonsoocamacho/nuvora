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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->onDelete('cascade');

            $table->string('name');
            $table->string('slug')->unique();               // for internal use
            $table->text('description')->nullable();       // optional description
            $table->json('features')->nullable();           // optional

            $table->boolean('is_visible')->default(true);
            $table->boolean('is_default')->default(false);

            $table->timestamps();
        });

        Schema::create('membership_prices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('membership_id')->constrained()->onDelete('cascade');

            $table->enum('billing_cycle', ['monthly', 'yearly']);
            $table->decimal('price', 8, 2);
            $table->foreignId('currency_id')->nullable()->constrained()->nullOnDelete();

            $table->timestamps();

            $table->unique(['membership_id', 'billing_cycle']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
        Schema::dropIfExists('membership_prices');
    }
};
