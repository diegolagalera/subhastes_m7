<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_usuari')->unsigned();
            $table->integer('id_subhasta')->unsigned();
            $table->decimal('preu',28,10)->unsigned();
            $table->date('temps');
            $table->integer('guanyador')->unsigned();
            $table->timestamps();
            $table->foreign('id_usuari')->references('id')->on('users');
            $table->foreign('id_subhasta')->references('id')->on('subhastes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licitacions');
    }
}
