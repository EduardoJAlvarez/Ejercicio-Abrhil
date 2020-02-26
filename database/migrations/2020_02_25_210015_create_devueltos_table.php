<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevueltosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Esta tabla nos ayudara para los registros de los productos devueltos */
        Schema::create('devueltos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('herramienta');
            $table->string('marca');
            $table->integer('cantidad');
            $table->string('fecha');
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
        Schema::dropIfExists('devueltos');
    }
}
