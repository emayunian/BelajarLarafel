<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilm extends Migration
{
    public function up()
    {
        Schema::create('film',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('id_kategory');
            $table->string('judul_film');
            $table->string('sutradata');
            $table->string('tahun_rilis');
            $table->text('sinopsis');
            $table->date('tanggal_input_data');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('film');
    }
}
