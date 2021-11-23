<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConteudofotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudofotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conteudo_id');
            $table->string('legenda', 150)->nullable();
            $table->string('arquivo', 150);
            $table->foreign('conteudo_id')->references('id')->on('conteudos');
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
        Schema::dropIfExists('conteudofotos');
    }
}
