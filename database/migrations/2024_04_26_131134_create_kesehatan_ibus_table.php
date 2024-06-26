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
        Schema::create('kesehatan_ibus', function (Blueprint $table) {
            $table->foreignId('kesehatan_id')->primary()->constrained('kesehatans', 'kesehatan_id');
            $table->string('pemeriksaan_kehamilan');
            $table->text('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_ibus');
    }
};
