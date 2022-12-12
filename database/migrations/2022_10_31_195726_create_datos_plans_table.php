<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plan');
            $table->foreign('id_plan')->references('id')->on('oferta_educativas')->onDelete("cascade");
            $table->longText('objetivo');
            $table->longText('mision');
            $table->longText('vision');
            $table->longText('valores');
            $table->longText('perfil_in');
            $table->longText('perfil_eg');
            $table->longText('requisitos_in');
            $table->longText('requisitos_eg');
            $table->string('titulo');
            $table->string('sistema');
            $table->string('modalidad');
            $table->string('grado');
            $table->string('responsable');
            $table->string('correo');
            $table->string('telefono');
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
        Schema::dropIfExists('datos_plans');
    }
};
