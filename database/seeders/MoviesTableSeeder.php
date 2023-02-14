<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 15; $i++){
            $newMovie = new Movie();
           
            $newMovie->title = "sd";
            $newMovie->genre = "sd";
            $newMovie->description = "dssdadsadsa";
            $newMovie->director = "sadjkh";
            $newMovie->release_date = "23/10/12";
            $newMovie->save();
        }
    }
}
