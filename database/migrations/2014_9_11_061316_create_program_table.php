<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->char('nombre');
            $table->unsignedBigInteger('institucion_id');
            $table->foreign('institucion_id')->references('id')->on('institucion');
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
        Schema::dropIfExists('program');
    }
}
