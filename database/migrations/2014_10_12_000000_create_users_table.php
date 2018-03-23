<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('dni');
            $table->string('country');
            $table->integer('cp');
            $table->string('city');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('email_token')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('active')->default(1);
            $table->boolean('verified')->default(0);
            $table->integer('id_rol')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
