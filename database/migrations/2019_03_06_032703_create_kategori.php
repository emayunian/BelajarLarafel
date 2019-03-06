<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategori extends Migration
{

    public function up()
    {
        Schema::create('kategory',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nama_kategory');
            $table->string('slug');
            $table->date('tanggal_input_data');
            $table->timestamps();
        });
    }

    
    public function down()
    {
         Schema::dropIfExists('kategory');
    }
}
