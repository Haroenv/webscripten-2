<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds for db: blog
     *
     * @return void
     */
    public function run()
    {
		 $this->call(CategoriesTableSeeder::class);		
         $this->call(BlogpostsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(CommentsTableSeeder::class);

    }
}
