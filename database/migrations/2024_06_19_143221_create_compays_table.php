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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('company_user', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->primary(['company_id', 'user_id']);
        });

        Schema::create('company_rider', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained();
            $table->foreignId('rider_id')->constrained();
            $table->primary(['company_id', 'rider_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_user');
        Schema::dropIfExists('company_rider');
        Schema::dropIfExists('companies');
    }
};
