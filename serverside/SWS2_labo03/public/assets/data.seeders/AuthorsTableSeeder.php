<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Authors table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'firstname' => 'Kevin',
            'lastname' => 'Picalausa',
            'email' => 'kevin.picalausa@odisee.be',
            'website' => 'www.ikdoeict.be',
            'location' => 'Gent, Belgium',
            'password' => '$2y$10$W2IQSdQ0F72IWx7NuqhKrO0Tck/llMsD9CDh7sSQfqyrd0wVuFlu.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('authors')->insert([
            'firstname' => 'Joris',
            'lastname' => 'Maervoet',
            'email' => 'joris.maervoet@odisee.be',
            'website' => 'www.springboon.be',
            'location' => 'Rupelmonde, Belgium',
            'password' => '$2y$10$ucOI21uOWCNZm7.HfpKPbeVetdnfBCgRlCWJm/dIBblfXcBoi4jGu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('authors')->insert([
            'firstname' => 'Jan',
            'lastname' => 'Janssens',
            'email' => 'jan.janssens@odisee.be',
            'website' => 'null',
            'location' => 'Boom, Belgium',
            'password' => '$2y$10$52SCCJ3a2MpbwyvA.FRj3.5GstF4Oix24TBkav7/JZnuDxDf7H.ia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
