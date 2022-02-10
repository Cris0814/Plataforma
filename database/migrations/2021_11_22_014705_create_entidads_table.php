<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('value');
            $table->unsignedBigInteger('columnas_id');
            $table->foreign('columnas_id')->references('id')->on('columnas');
            $table->unsignedBigInteger('estrategias_id');
            $table->foreign('estrategias_id')->references('id')->on('estrategias');
            $table->unsignedBigInteger('herramientas_id');
            $table->foreign('herramientas_id')->references('id')->on('herramientas');
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
        Schema::dropIfExists('entidads');
    }
}
