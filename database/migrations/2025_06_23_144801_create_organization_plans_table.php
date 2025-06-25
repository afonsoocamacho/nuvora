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
        Schema::create('organization_plan', function (Blueprint $table) {
            $table->id();

            // Foreign keys
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');
            $table->foreignId('plan_price_id')->nullable()->constrained()->nullOnDelete();

            // Snapshot of the selected pricing at the time of subscription
            $table->enum('billing_cycle', ['monthly', 'yearly'])->default('monthly');
            $table->decimal('price', 8, 2); // price at time of subscription

            // Subscription lifecycle
            $table->date('start_at');      // when this subscription cycle begins
            $table->date('end_at')->nullable(); // nullable to support unlimited plans

            $table->enum('status', ['active', 'cancelled', 'expired'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_plans');
    }
};
