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
        Schema::create('knowlidges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gejala_id')->nullable();
            $table->unsignedBigInteger('kerusakan_id')->nullable();

            $table->unique(['gejala_id', 'kerusakan_id']);
            // Definisi foreign key constraints
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kerusakan_id')->references('id')->on('kerusakans')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowlidges');
    }
};
