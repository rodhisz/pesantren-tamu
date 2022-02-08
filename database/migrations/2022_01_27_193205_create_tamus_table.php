<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal');
            $table->string('keperluan');
            $table->integer('jumlah_tamu');
            $table->string('nomor_hp');
            $table->enum('jenis_kendaraan', ['Kendaraan Roda 2', 'Kendaraan Roda 4 atau Lebih']);
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
        Schema::dropIfExists('tamu');
    }
}
