<?php

use Illuminate\Database\Seeder;

class BlogpostsTableSeeder extends Seeder
{
    /**
     * Blogposts table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogposts')->insert([
            'title' => 'Vel voluptate eos eaque magnam possimus ullam ipsa corporis',
            'content' => '<p>Non rerum ipsum iusto aliquid dolorem quis. Asperiores esse voluptate aut ad. Repellat doloremque aut ratione sed vitae corrupti aut aspernatur.</p><p>Ducimus velit quod consequuntur. Porro sunt facere vero ex tempora recusandae. Tempora voluptatem enim et magnam excepturi nihil.</p><p>Explicabo consequatur veritatis odit incidunt. Quibusdam accusamus enim natus suscipit.</p><p>Omnis iusto voluptatem nihil fuga voluptates. Illum assumenda suscipit quo et iusto a ut eos. Expedita ad eos optio quia debitis quia qui. Id aut dicta eligendi.</p><p>Non nobis explicabo quisquam harum id. Necessitatibus blanditiis asperiores totam sed aut omnis. Repellat voluptatem quia sed explicabo nulla et et ducimus. Sed quod eos asperiores.</p><p>Harum nihil quis recusandae sed voluptas sed error. Et dolores voluptate voluptatibus unde earum.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author_id' => rand(1,3),
            'numcomments' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blogposts')->insert([
            'title' => 'Ut et assumenda facere enim in pariatur quisquam aspernatur.',
            'content' => '<p>Ex fuga sunt provident fugiat voluptatem ut fuga ullam. Amet fugit iste hic blanditiis perferendis aut. Nemo nihil molestias alias.</p><p>Assumenda eos aliquam sed ipsa et voluptatem at. Et reprehenderit laboriosam quisquam minima. Rem doloribus iusto et repudiandae similique aut veniam. Impedit qui ipsa pariatur ea repudiandae.</p><p>Incidunt eaque accusamus facere quia libero sit. Maiores iusto autem corporis sint minus adipisci officia. Eligendi velit quae odit aut. Quaerat debitis in distinctio sunt amet reiciendis est.</p><p>Doloremque ipsam quidem non ipsa voluptatem veniam eos. Fugiat odit et facilis. Aliquam modi accusantium nam et ut doloremque laboriosam.</p><p>Nostrum enim dignissimos quia harum. Et perspiciatis tenetur sit minus quae. Aut ad et labore delectus sed laboriosam.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author_id' => rand(1,3),
            'numcomments' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blogposts')->insert([
            'title' => 'Ut placeat dignissimos vero magni qui soluta.',
            'content' => '<p>Sed qui minus perferendis et. Est numquam aperiam quasi doloribus et. Quo et quo quia provident aut minima libero voluptatem. Rem architecto modi ut id placeat animi.</p><p>Veniam eos qui molestiae doloremque. Odit id quia similique illum veritatis qui et. Voluptas velit iure voluptatibus rerum. Consectetur accusantium veniam tempora quo.</p><p>Ut sed sit in rem ea. Quia consequatur tenetur facilis quam maxime eum consequatur. Eum eum tenetur labore. Ab facere quia non.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author_id' => rand(1,3),
            'numcomments' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blogposts')->insert([
            'title' => 'Voluptatibus blanditiis qui laudantium consequuntur rerum',
            'content' => '<p>Non rerum ipsum iusto aliquid dolorem quis. Asperiores esse voluptate aut ad. Repellat doloremque aut ratione sed vitae corrupti aut aspernatur.</p><p>Ducimus velit quod consequuntur. Porro sunt facere vero ex tempora recusandae. Tempora voluptatem enim et magnam excepturi nihil.</p><p>Explicabo consequatur veritatis odit incidunt. Quibusdam accusamus enim natus suscipit.</p><p>Omnis iusto voluptatem nihil fuga voluptates. Illum assumenda suscipit quo et iusto a ut eos. Expedita ad eos optio quia debitis quia qui. Id aut dicta eligendi.</p><p>Non nobis explicabo quisquam harum id. Necessitatibus blanditiis asperiores totam sed aut omnis. Repellat voluptatem quia sed explicabo nulla et et ducimus. Sed quod eos asperiores.</p><p>Harum nihil quis recusandae sed voluptas sed error. Et dolores voluptate voluptatibus unde earum.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author_id' => rand(1,3),
            'numcomments' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blogposts')->insert([
            'title' => 'Magnam enim optio esse quis qui quia eum.',
            'content' => '<p>Ex fuga sunt provident fugiat voluptatem ut fuga ullam. Amet fugit iste hic blanditiis perferendis aut. Nemo nihil molestias alias.</p><p>Assumenda eos aliquam sed ipsa et voluptatem at. Et reprehenderit laboriosam quisquam minima. Rem doloribus iusto et repudiandae similique aut veniam. Impedit qui ipsa pariatur ea repudiandae.</p><p>Incidunt eaque accusamus facere quia libero sit. Maiores iusto autem corporis sint minus adipisci officia. Eligendi velit quae odit aut. Quaerat debitis in distinctio sunt amet reiciendis est.</p><p>Doloremque ipsam quidem non ipsa voluptatem veniam eos. Fugiat odit et facilis. Aliquam modi accusantium nam et ut doloremque laboriosam.</p><p>Nostrum enim dignissimos quia harum. Et perspiciatis tenetur sit minus quae. Aut ad et labore delectus sed laboriosam.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author_id' => rand(1,3),
            'numcomments' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blogposts')->insert([
            'title' => 'Velit at sit omnis delectus nisi sunt dolor ea enim.',
            'content' => '<p>Sed qui minus perferendis et. Est numquam aperiam quasi doloribus et. Quo et quo quia provident aut minima libero voluptatem. Rem architecto modi ut id placeat animi.</p><p>Veniam eos qui molestiae doloremque. Odit id quia similique illum veritatis qui et. Voluptas velit iure voluptatibus rerum. Consectetur accusantium veniam tempora quo.</p><p>Ut sed sit in rem ea. Quia consequatur tenetur facilis quam maxime eum consequatur. Eum eum tenetur labore. Ab facere quia non.</p>',
            'date' => date("Y-m-d H:i:s",mt_rand(1262055681,1645619256)),
            'author_id' => rand(1,3),
            'numcomments' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
