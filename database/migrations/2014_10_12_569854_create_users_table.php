//<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('edad')->nullable(true);
            $table->char('institucion',100)->nullable(true);
            // $table->unsignedInteger('institucion_id');
            $table->char('programa',100)->nullable(true);
            $table->char('asignatura',100)->nullable(true);
            $table->char('num_estudiante')->nullable(true);
            $table->integer('num_m')->nullable(true);
            $table->integer('num_h')->nullable(true);
            $table->char('semestre',100)->nullable(true);
            $table->char('modalidad',100)->nullable(true);
            $table->char('tipo',100)->nullable(true);
            $table->char('pais',100)->nullable(true);
            $table->char('ciudad',100)->nullable(true);
            $table->char('region',100)->nullable(true);
            $table->boolean('is_admin');

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('institucion_id')->references('institucion_id')->on('institucion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
