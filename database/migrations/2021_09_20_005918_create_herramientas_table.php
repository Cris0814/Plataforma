<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nom_herra',100);
            $table->char('tipo_licencia',100);
            $table->char('funciones',100);
            $table->integer('interaccion');
            $table->integer('diseño');
            $table->integer('usabilidad');
            $table->integer('documentacion');
            $table->integer('actualizaciones');
            $table->char('porcentaje_aprove');
            $table->char('porcentaje_aproba');
            // $table->unsignedInteger('herramientas_instituciones_id');
            $table->timestamps();

            // $table->foreign('herramientas_instituciones_id')->references('id')->on('herramientas_instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('herramientas');
    }
}
