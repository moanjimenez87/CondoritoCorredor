<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiclistasxCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclistasxcarreras', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombreUsuario');
            $table->string('NombreCarrera');
            $table->rememberToken();
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
        Schema::dropIfExists('ciclistasxcarreras');
    }
}
