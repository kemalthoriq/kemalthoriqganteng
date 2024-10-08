<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$galleries = [
        [
            'image' =>'',
            'name' =>'',
            'title' => '',
        ],
        [
            'image' =>'',
            'name' =>'',
            'title' => '',
        ],
        [
            'image' =>'',
            'name' =>'',
            'title' => '',
        ]
        ];

        DB::table('galleries')->insert($galleries);
	
    }
}
