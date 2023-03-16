<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'food_category_name' => 'Ikan',
        ]);
        DB::table('food_categories')->insert([
            'food_category_name' => 'kerang',
        ]);
        DB::table('food_categories')->insert([
            'food_category_name' => 'Udang',
        ]);
        DB::table('food_categories')->insert([
            'food_category_name' => 'Cumi',
        ]);
        DB::table('food_categories')->insert([
            'food_category_name' => 'Sayuran',
        ]);
    }
}
