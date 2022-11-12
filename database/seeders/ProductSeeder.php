<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Asus computer',
            'description' => 'Computer Asus xs',
            'price' => 2750
        ]);
        DB::table('products')->insert([
            'name' => 'Asus computer 1',
            'description' => 'Computer Asus xs',
            'price' => 2750
        ]);
        DB::table('products')->insert([
            'name' => 'Asus computer 2',
            'description' => 'Computer Asus xs',
            'price' => 2750
        ]);
    }
}
