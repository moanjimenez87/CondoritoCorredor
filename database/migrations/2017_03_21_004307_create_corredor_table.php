<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorredorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre', 66)->nullable();
            $table->string('apellido', 66)->nullable();
            $table->float('Telefono', 11, 2)->default(0.0);
            $table->string('correo', 66)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique(['name']);
 });
        Schema::dropIfExists('corredores');
    }
}
