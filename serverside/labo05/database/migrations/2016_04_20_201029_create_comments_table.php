<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note: When creating a foreign key that references an incrementing integer, remember to always make the foreign key column unsigned.
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blogpost_id')->unsigned();
            $table->foreign('blogpost_id')->references('id')->on('blogposts');
            $table->text('content');
            $table->date('date');
            $table->string('author');
            $table->string('email');
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
        Schema::drop('comments');
    }
}
