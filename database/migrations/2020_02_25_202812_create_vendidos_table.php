<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*Aquí pondremos la tabla que deseemos migrar y utilizar más adelante para interectuar
     con ella  para los registros que utilizaremos para que podamos mostrar los producto que hemos vendido al cliente*/
    public function up()
    {
        Schema::create('venders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('herramienta');
            $table->string('noserie');
            $table->string('marca');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->integer('total');
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
        Schema::dropIfExists('vendidos');
    }
}
