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
            Schema::create('table_keluarga', function (Blueprint $table) {
                $table->id('id_keluarga');
                $table->string('nama', 100);
                $table->string('nama_ayah', 100);
                $table->string('nama_ibu', 100);
                $table->string('jumlah_saudara');
                $table->string('pendidikan_terakhir_ayah', 255);
                $table->string('pendidikan_terakhir_ibu', 255);
                $table->text('alamat');
                $table->string('pendidikan_terakhir', 255);
                $table->text('deskripsi');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_keluarga');
    }
};
