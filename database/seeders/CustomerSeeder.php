<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customer = [
        [
            'image' =>'',
            'name' =>'',
       ],
       [
            'image' =>'',
            'name' =>'',
       ],
       [
            'image' =>'',
            'name' =>'',
       ],
       [
            'image' =>'',
            'name' =>'',
       ],
       [
            'image' =>'',
            'name' =>'',
       ],

        ];

        DB::table('customers')->insert($customer);
    }
}
 