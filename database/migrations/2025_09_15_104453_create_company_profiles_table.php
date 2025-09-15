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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->longText('history')->nullable();
            $table->string('director_name')->nullable();
            $table->string('director_position')->nullable();
            $table->string('director_photo')->nullable();
            $table->json('vision')->nullable();
            $table->json('mission')->nullable();
            $table->json('policy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
