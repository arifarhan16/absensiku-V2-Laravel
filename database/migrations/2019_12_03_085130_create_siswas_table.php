<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable('');
            $table->string('kelas')->nullable('');
            $table->string('hari')->nullable('');
            $table->string('tanggal')->nullable('');
            $table->string('bulan')->nullable('');
            $table->string('tahun')->nullable('');
            $table->string('kehadiran')->nullable('');
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
        Schema::dropIfExists('siswa');
    }
}
