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
        Schema::create('rule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gejala_id');
            $table->unsignedBigInteger('kerusakan_id');
            // Kolom tambahan sesuai kebutuhan Anda
            $table->timestamps();

            // Menambahkan indeks ke kedua kolom sebagai indeks unik
            $table->unique(['gejala_id', 'kerusakan_id']);

            // Menambahkan foreign key constraint
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
            $table->foreign('kerusakan_id')->references('id')->on('kerusakans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rule');
    }
};
