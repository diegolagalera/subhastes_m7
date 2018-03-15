<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_article')->unsigned();
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categories');
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
        Schema::dropIfExists('categories_articles');
    }
}
