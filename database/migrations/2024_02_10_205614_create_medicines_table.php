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
        schema::disableForeignKeyConstraints();
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId('speciality_id')->constrained('specialities');
            $table->foreignId('disease_id')->constrained('diseases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
