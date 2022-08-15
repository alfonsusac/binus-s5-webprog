<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category'=> "Fiction"],
            ['category'=> "Science"],
            ['category'=> "Computer"],
            ['category'=> "Self-help"],
            ['category'=> "Business"],
            ['category'=> "Enterprises"],
            ['category'=> "Family"],
            ['category'=> "Pets"],
            ['category'=> "Foods"],
            ['category'=> "Fictions"],
            //...
        ];
        DB::table('categories')->insert($data); // Query Builder approach
    }
}
