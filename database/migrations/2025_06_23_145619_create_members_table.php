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
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            // Core relationships
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_type_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('country_id')->nullable()->constrained()->nullOnDelete();

            // Unique identifier
            $table->string('card_number')->unique()->nullable();

            // Identity
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable()->index();
            $table->string('phone_number')->nullable();
            $table->date('birthdate')->nullable();

            // Membership status
            $table->enum('status', ['active', 'inactive', 'banned'])->default('active');

            // Metadata
            $table->timestamp('joined_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('member_addresses', function (Blueprint $table) {
            $table->id();

            // Core relationships
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');

            // Address details
            $table->string('type')->default('main'); // 'main', 'billing', etc.
            $table->string('address')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->foreignId('country_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('member_bank_accounts', function (Blueprint $table) {
            $table->id();

            // Core relationships
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');

            // Banking details
            $table->text('iban')->nullable(); // Should be encrypted
            $table->string('bic')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->boolean('is_primary')->default(true);
            $table->timestamps();
        });

        Schema::create('member_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('member_addresses');
        Schema::dropIfExists('member_bank_accounts');
        Schema::dropIfExists('member_type');
    }
};
