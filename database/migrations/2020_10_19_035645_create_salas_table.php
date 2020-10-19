<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id('cod_sala');
            $table->unsignedBigInteger('cod_bloco');
            $table->foreign('cod_bloco')
                  ->references('cod_bloco')->on('blocos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nome_sala');
            $table->string('descricao_sala');
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
        Schema::dropIfExists('salas');
    }
}
