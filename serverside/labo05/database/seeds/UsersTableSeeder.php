<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Authors table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Kevin',
            'lastname' => 'Picalausa',
            'email' => 'kevin.picalausa@odisee.be',
            'website' => 'www.ikdoeict.be',
            'location' => 'Gent, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Joris',
            'lastname' => 'Maervoet',
            'email' => 'joris.maervoet@odisee.be',
            'website' => 'www.springboon.be',
            'location' => 'Rupelmonde, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Jan',
            'lastname' => 'Janssens',
            'email' => 'jan.janssens@odisee.be',
            'website' => 'null',
            'location' => 'Boom, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
