<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Comments table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Anne Welch',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Shanny Howe',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 2,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Darrick Towne',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 3,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Paolo Ankunding',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 3,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Chelsie Gottlieb',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 5,
            'content' => '<p>Quod aspernatur sunt cum qui aut. Animi et explicabo ea.</p><p>Cupiditate id eum eum in ab. Id sint quidem nostrum. Similique labore doloribus eos at.</p><p>Officiis non rem ea quia ut. Quis quaerat itaque voluptatem a impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Alanna Moen',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 5,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Blanche Harris',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('comments')->insert([
            'post_id' => 6,
            'content' => '<p>Quod aspernatur sunt cum qui aut. Animi et explicabo ea.</p><p>Cupiditate id eum eum in ab. Id sint quidem nostrum. Similique labore doloribus eos at.</p><p>Officiis non rem ea quia ut. Quis quaerat itaque voluptatem possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author' => 'Dr. Jaiden Legros',
            'email' => str_random(10).'@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
