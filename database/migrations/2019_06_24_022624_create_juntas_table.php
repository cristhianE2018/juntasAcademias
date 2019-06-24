<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juntas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nivel_de_Importancia');
            $table->string('Motivos');
            $table->string('Lugar');
            $table->string('Fecha');
            $table->string('Hora');
            $table->bigInteger('academia')->nullable()->unsigned();
            $table->foreign('academia')->references('id')->on('academias');
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
        Schema::dropIfExists('juntas');
    }
}
