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
        Schema::create('stamping_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
        
        Schema::create('stampings', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('stamping_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('dimension')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stampings');
        Schema::dropIfExists('stamping_categories');
    }
};