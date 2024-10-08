<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolios = [
        [
            'image' =>'',
            'name' =>'',
            'title' => '',
            'created_at' => ''
        ],
        [
            'image' =>'',
            'name' =>'',
            'title' => '',
            'created_at' => ''
        ],
         [
            'image' =>'',
            'name' =>'',
            'title' => '',
            'created_at' => ''
        ],
        [
            'image' =>'',
            'name' =>'',
            'title' => '',
            'created_at' => ''
        ],
        ];

        DB::table('portfolios')->insert($portfolios);
    }
}
