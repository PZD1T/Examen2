<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run()
    {
        Artist::create(['artist_name' => 'John Lennon']);
        Artist::create(['artist_name' => 'Michael Jackson']);
        Artist::create(['artist_name' => 'Sam Smith']);
       
    }
}
