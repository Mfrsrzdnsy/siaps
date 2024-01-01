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
        Schema::create('table_admin', function (Blueprint $table) {
            $table->id('id_agen');
            $table->string('username_agen', 50);
            $table->string('email_agen', 255);
            $table->string('password_agen', 255);
            $table->integer('notelp_agen',12);
            $table->text('alamat');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_admin');
    }
};
