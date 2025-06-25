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
        Schema::create('member_invoices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_membership_id')->nullable()->constrained()->nullOnDelete();

            $table->string('reference')->unique();               // Unique reference for the invoice
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

        Schema::create('member_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_invoice_id')->constrained('member_invoices')->onDelete('cascade');

            $table->decimal('amount', 10, 2);
            $table->string('method')->nullable();
            $table->string('reference')->nullable();
            $table->timestamp('paid_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_invoices');
        Schema::dropIfExists('member_payments');
    }
};
