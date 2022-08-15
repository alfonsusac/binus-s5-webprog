<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            [
                'title' => 'Worlds',
                'genre' => 'Electronic',
                'year' => 2014,
            ],
            [
                'title' => 'Nurture',
                'genre' => 'Electronic, Pop, Classical',
                'year' => 2021,
            ],
        ]);
    }
}
