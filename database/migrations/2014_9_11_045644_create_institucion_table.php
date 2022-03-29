<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombre',100);
            $table->char('pais',100);
            $table->char('ciudad',100);
            $table->char('tipo',100);
            //$table->unsignedInteger ('institucion_id');
            $table->timestamps();

            //$table->foreign('institucion_id')->references('id')->on('institucion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institucion');
    }
}
