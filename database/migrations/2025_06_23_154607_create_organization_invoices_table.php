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
        Schema::create('organization_invoices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('organization_plan_id')->nullable()->constrained()->nullOnDelete();

            $table->string('reference')->unique();            // Unique reference for the invoice
            $table->decimal('amount', 10, 2);
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->string('currency', 3)->default('EUR');

            $table->enum('status', ['draft', 'unpaid', 'paid', 'overdue', 'cancelled'])->default('unpaid');
            $table->date('issued_at');
            $table->date('due_at')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('organization_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_invoice_id')->constrained('organization_invoices')->onDelete('cascade');

            $table->decimal('amount', 10, 2);
            $table->enum('method', ['SEPA', 'Stripe', 'Paypal'])->nullable();
            $table->string('reference')->nullable(); // transaction ref
            $table->timestamp('paid_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_invoices');
        Schema::dropIfExists('organization_payments');
    }
};
