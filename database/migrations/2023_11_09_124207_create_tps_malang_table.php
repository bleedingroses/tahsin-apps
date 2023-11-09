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
        Schema::create('tps_malang', function (Blueprint $table) {
            $table->id();
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->string('nomor');
            $table->string('koordinat');
            $table->string('jumlah_1');
            $table->string('jumlah_2');
            $table->string('jumlah_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps_malang');
    }
};
