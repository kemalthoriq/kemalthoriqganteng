<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$blogs = [
        [
            'image' =>'',
            'author' =>'',
            'title' => '',
            'content' =>'',
            'created_at' => ''
        ],
        [
            'image' =>'',
            'author' =>'',
            'title' => '',
            'content' =>'',
            'created_at' => ''
        ],
         [
            'image' =>'',
            'author' =>'',
            'title' => '',
            'content' =>'',
            'created_at' => ''
        ],
        ];

        DB::table('blogs')->insert($blogs);



    }
}
