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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->unsignedBigInteger('id_level_anggota')->index();
            $table->unsignedBigInteger('id_kesehatan')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->integer('no_kk');
            $table->string('nama', 50);
            $table->date('tanggal_lahir');
            $table->string('alamat', 255);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('no_telp', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
