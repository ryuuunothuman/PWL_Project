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
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id('kesehatan_id');
            $table->foreignId('anggota_id')->constrained('anggotas', 'anggota_id');
            $table->date('tanggal_periksa');
            $table->decimal('tinggi_badan', 5,2);
            $table->decimal('berat_badan', 5,2);
            $table->string('tekanan_darah');
            $table->text('keluhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatans');
    }
};
