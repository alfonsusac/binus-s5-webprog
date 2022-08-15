<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('details')->insert([
            [
            'email' => 'example@gmail.com',
            'address' => 'Jakarta Selatan',
            'member_id' => 1,
            ],
        ]);
    }
}
