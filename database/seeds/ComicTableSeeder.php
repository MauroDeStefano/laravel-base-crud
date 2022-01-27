<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_db = config('comics');

        foreach ($comics_db as $comic){

            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->slug = Str::slug($new_comic->title, '-');
            $new_comic->description = $comic['description'];
            $new_comic->img = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->serie = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            $new_comic->save();


        }

    }
}