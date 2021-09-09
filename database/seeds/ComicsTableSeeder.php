<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_db = config('comic');

        foreach ($comics_db as $comic) {
           $nComic = new comic();
           $nComic->title = $comic['title'];
           $nComic->description = $comic['description'];
           $nComic->thumb = $comic['thumb'];
           $nComic->price = $comic['price'];
           $nComic->type = $comic['type'];
           $nComic->series = $comic['series'];

           $nComic->save();


        }
    }
}
