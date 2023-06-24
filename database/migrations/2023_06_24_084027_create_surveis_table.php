<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survei', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama_lengkap')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('alamat')->nullable();

            $table->string('status')->nullable();

            $table->string('nama_kampus')->nullable();
            $table->string('tanggal_masuk_kampus')->nullable();
            $table->string('alamat_kampus')->nullable();

            $table->string('nama_tempat_kerja')->nullable();
            $table->string('tanggal_mulai_kerja')->nullable();
            $table->string('alamat_tempat_kerja')->nullable();

            $table->string('saran')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survei');
    }
};
