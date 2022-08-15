<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category_id'=> "1", 'title'=> "ZZ (Paperback)"],
            ['category_id'=> "1", 'title'=> "A Suitable Boy (A Suitable Boy, #1)"],
            ['category_id'=> "2", 'title'=> "Go Down, MosesGo Down, Moses (Paperback)"],
            ['category_id'=> "2", 'title'=> "CigarettesCigarettes (Paperback)"],
            ['category_id'=> "3", 'title'=> "The Savage DetectivesThe Savage Detectives (Hardcover)"],
            ['category_id'=> "3", 'title'=> "The False Prince"],
            ['category_id'=> "4", 'title'=> "Fifty Shades of Grey"],
            ['category_id'=> "4", 'title'=> "Act Your Age, Eve Brown: A Novel"],
            ['category_id'=> "5", 'title'=> "American Dirt (Oprah's Book Club): A Novel"],
            ['category_id'=> "5", 'title'=> "Bowlaway: A Novel"],
            //...
        ];
        DB::table('books')->insert($data); // Query Builder approach
    }
}
