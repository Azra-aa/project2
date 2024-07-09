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
        Schema::create('faskes', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nama_pengelola', 45);
            $table->string('alamat', 100);
            $table->string('website', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->foreignId('kabkota_id')->constrained();
            $table->integer('rating');
            $table->double('latitude');
            $table->double('longitude');
            $table->foreignId('jenis_faskes_id')->constrained();
            $table->foreignId('kategori_id')->constrained();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
};
