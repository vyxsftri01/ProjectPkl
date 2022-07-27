<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_identitas');
            $table->string('jumlah');
            $table->string('lamas');
            $table->string('tgl_masuk');
            $table->string('tgl_keluar');
            $table->unsignedBigInteger('id_villas');
            // membuat fk id_siswa yang mengacu kpd field id di table
            // siswas
            $table->foreign('id_identitas')->references('id')->on('identitas')
                ->onDelete('cascade');
                $table->foreign('id_villas')->references('id')->on('villas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pemesanans');
    }
}
