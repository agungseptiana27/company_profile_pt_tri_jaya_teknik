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
        Schema::create('fabrications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fabrication_category_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('material')->nullable();
            $table->string('process')->nullable();
            $table->string('capacity')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabrications');
    }
};
