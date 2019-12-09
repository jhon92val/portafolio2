<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('trabajo_id');
            $table->foreign('trabajo_id','fk_trabajos_imagen')->references('id')->on('trabajos')->onDelete('restrict')->onUpdate('restrict');
           // $table->string('titulo');
            $table->string('imagen');
            $table->string('size');
            //$table->string('descripcion');
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
        Schema::dropIfExists('imagenes');
    }
}
