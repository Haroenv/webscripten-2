<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
           $table->increments('id');
           $table->string('firstname');
           $table->string('lastname');
           $table->string('email');
           $table->string('website');
           $table->string('location');
           $table->string('password');
           $table->date('created_at');
           $table->date('updated_at');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('authors');
    }
}
