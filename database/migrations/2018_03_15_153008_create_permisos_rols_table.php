<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_rols', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->integer('id_permis')->unsigned();
            $table->timestamps();
            $table->foreign('id_rol')->references('id')->on('rols');
            $table->foreign('id_permis')->references('id')->on('permisos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_rols');
    }
}
