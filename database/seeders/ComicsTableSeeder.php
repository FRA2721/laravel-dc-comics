<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @author FRANCESCO CIMINO
     */
    public function run()
    {
        $comicsData = config('comics');
        // check
        // dd($comicsData);

        // data iteration
        foreach ($comicsData as $comic) {
            // comics creation
            $newComic = new Comic();
            // $newComic->fill($comic);
             $newComic->title = $comic['title'];
             $newComic->description = $comic['description'];
             $newComic->thumb = $comic['thumb'];
             $newComic->price = $comic['price'];
             $newComic->series = $comic['series'];
             $newComic->sale_date = $comic['sale_date'];
             $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}
