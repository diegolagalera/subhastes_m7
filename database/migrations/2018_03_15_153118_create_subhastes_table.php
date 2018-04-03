<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubhastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subhastes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_article')->unsigned();
            $table->integer('preu_venta');
            $table->boolean('actiu')->default(1);
            $table->dateTime('data');
            $table->timestamps();
            $table->foreign('id_article')->references('id')->on('articles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subhastes');
    }
}
