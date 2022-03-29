<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstrategiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategias', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->char('tipo_estra',100);
            $table->char('nom_estra',100);
            $table->integer('valoracion_estra');
            $table->char('estra_evaluacion',100);
            $table->char('compete_evaluar',100);
            $table->char('tipo_herra',100);
            $table->char('nom_herra',100);
            
            
            
            
            // $table->unsignedInteger('estrategias_instituciones_id');

            $table->timestamps();

            // $table->foreign(estrategias_instituciones_id)->references('id')->on('estrategias_instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estrategias');
    }
}
