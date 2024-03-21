<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::create(['genre_name' => 'Rock']);
        Genre::create(['genre_name' => 'Pop']);
        Genre::create(['genre_name' => 'Jazz']);
        Genre::create(['genre_name' => 'Hip Hop']);
        
    }
}

