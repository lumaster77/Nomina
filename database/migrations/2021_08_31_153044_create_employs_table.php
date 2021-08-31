<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('codigo', 20);
            $table->string('nombre', 30);
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno', 20);
            $table->string('correo');
            $table->string('tipo_contrato', 20);
            $table->boolean('estado');
            $table->boolean('eliminar');
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
        Schema::dropIfExists('employs');
    }
}
