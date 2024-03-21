<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::create([
            'album_name' => 'Álbum 1',
            'date_released' => '2022-01-01',
            'artist_id' => 1, 
            'genre_id' => 1, 
        ]);

        Album::create([
            'album_name' => 'Álbum 2',
            'date_released' => '2022-02-01',
            'artist_id' => 2, 
            'genre_id' => 2, 
        ]);

      
    }
}

