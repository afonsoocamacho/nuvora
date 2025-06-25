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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();

            // Identity
            $table->string('name');
            $table->string('slug')->unique(); // for URL use
            $table->enum('type', ['company', 'association'])->default('company');
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            // Authentication
            $table->text('two_factor_secret')->after('password')->nullable();
            $table->text('two_factor_recovery_codes')->after('two_factor_secret')->nullable();
            $table->timestamp('two_factor_confirmed_at')
                ->after('two_factor_recovery_codes')
                ->nullable();
            $table->string('password'); // hashed
            $table->rememberToken();

            // Branding
            $table->string('logo')->nullable(); // path to logo image

            // Additional Information
            $table->string('vat_number')->nullable();
            $table->string('description')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('organization_social_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->string('platform');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('organization_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->string('type')->default('main'); // 'main', 'billing', etc.
            $table->string('address')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->foreignId('country_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('organization_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->text('iban')->nullable(); // Should be encrypted
            $table->string('bic')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->boolean('is_primary')->default(true);
            $table->timestamps();
        });

        Schema::create('organization_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('organization_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->string('key');
            $table->text('value')->nullable();
            $table->timestamps();

            $table->unique(['organization_id', 'key']);
        });

        Schema::create('organization_sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // session ID
            $table->foreignId('organization_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('organization_password_reset_tokens');
        Schema::dropIfExists('organization_sessions');
        Schema::dropIfExists('organization_settings');
        Schema::dropIfExists('organization_bank_accounts');
        Schema::dropIfExists('organization_addresses');
        Schema::dropIfExists('organization_social_links');
    }
};
