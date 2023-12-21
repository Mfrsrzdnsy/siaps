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
                $table->string('nis', 20);
                $table->string('nama', 50);
                $table->string('jenis_kelamin');
                $table->string('tempat_lahir', 50);
                $table->date('tanggal_lahir');
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
