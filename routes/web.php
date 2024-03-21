<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/Albums',AlbumController::class);
Route::resource('/Artist',ArtistController::class);
Route::resource('/Genre',GenreController::class);
