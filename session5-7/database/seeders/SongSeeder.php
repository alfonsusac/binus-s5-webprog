<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            ['title' => 'Divinity','author' => 'Porter Robinson','album_id' => 1],
            ['title' => 'Sad Machine','author' => 'Porter Robinson','album_id' => 1],
            ['title' => 'Flicker','author' => 'Porter Robinson','album_id' => 1],
            ['title' => 'Fresh Static Snow	','author' => 'Porter Robinson','album_id' => 1],
            ['title' => 'Wind Tempos','author' => 'Porter Robinson','album_id' => 2],
            ['title' => 'Do-re-mi-fa-so-la-ti-do','author' => 'Porter Robinson','album_id' => 2],
            ['title' => 'Mirror','author' => 'Porter Robinson','album_id' => 2],
        ]);
    }
}
