<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_statistics')->insert([
            [
                'album_id' => 1,
                'have' => 4336,
                'want' => 2905,
                'rating' => 4.51,
                'ratings' => 538,
            ],
            [
                'album_id' => 2,
                'have' => 1917,
                'want' => 629,
                'rating' => 4.53,
                'ratings' => 201,
            ],
        ]);
    }
}
