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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nik', 16);
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->integer('kodepos', 6);
            $table->integer('telp', 15);
            $table->string('email');
            $table->integer('nilai_un', 4);
            $table->string('asal_sma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};