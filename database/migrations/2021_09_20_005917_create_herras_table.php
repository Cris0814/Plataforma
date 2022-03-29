<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombre',100);

            $table->unsignedBigInteger('tipo_herra_id');
            $table->foreign('tipo_herra_id')->references('id')->on('tipo_herras');
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
        Schema::dropIfExists('herras');
    }
}
