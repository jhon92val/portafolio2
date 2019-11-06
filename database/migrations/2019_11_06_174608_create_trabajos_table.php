<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',50);
            $table->date('fecha');
            $table->text('contenido');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id','fk_trabajos_categoria')->references('id')->on('categorias')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('galeria_id');
            $table->foreign('galeria_id','fk_trabajos_galeria')->references('id')->on('galerias')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id','fk_trabajos_usuario')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajos');
    }
}
