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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');                  // e.g. "Portugal"
            $table->string('iso2', 2)->unique();     // e.g. "PT"
            $table->string('iso3', 3)->unique();     // e.g. "PRT"
            $table->string('phone_code')->nullable(); // e.g. "+351"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
