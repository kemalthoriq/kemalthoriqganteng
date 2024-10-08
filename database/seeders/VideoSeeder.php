<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $video = [
        [
            'video' =>'',
            'name' =>'',
            'title' => '',
        ],
        [
            'video' =>'',
            'name' =>'',
            'title' => '',
        ]
        
        ];

        DB::table('videos')->insert($video);
    }
}
