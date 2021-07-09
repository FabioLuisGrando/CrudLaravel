<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nmProduto');
            $table->string('dsProduto');
            $table->string('imagem');
            $table->integer('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
