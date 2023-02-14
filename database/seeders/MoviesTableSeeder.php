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
            $newMovie->original_title = "sd";
            $newMovie->title = "sd";
            $newMovie->nationality = "sd";
            $newMovie->publish_date = "2023-01-23";
            $newMovie->vote = 6;
            $newMovie->img = "sadjkh";
            $newMovie->save();
        }
    }
}
