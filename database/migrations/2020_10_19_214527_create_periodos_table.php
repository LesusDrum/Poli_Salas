<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id('cod_periodo');
            $table->unsignedBigInteger('cod_curso');
            $table->foreign('cod_curso')
                  ->references('cod_curso')->on('cursos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('periodo');
            $table->time('hora_entrada');
            $table->time('hora_saida');
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
        Schema::dropIfExists('periodos');
    }
}
