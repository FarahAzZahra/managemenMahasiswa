<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Kelas');
            $table->string('Jurusan');
            $table->string('Angkatan');
            $table->string('Email');
            $table->string('No_hp');
            $table->string('Alamat');
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
        Schema::dropIfExists('tabel_mahasiswa');
    }
}
