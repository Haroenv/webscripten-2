<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('category_id');
			$table->string('name');
            $table->timestamps();
        });
		
		Schema::table('blogposts', function ($table) {
			$table->integer('category_id')->unsigned()->default(0); // default value -> required hack when adding a column in SQLite
            $table->foreign('category_id')->references('category_id')->on('categories');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
