<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return  view('welcome');
});

Route::get('/characters', function () {
    return  view('linkHeader.characters');
});

Route::get('/comics', function () {
    return  view('linkHeader.comics');
});

Route::get('/movies', function () {
    return  view('linkHeader.movies');
});

Route::get('/tv', function () {
    return  view('linkHeader.tv');
});

Route::get('/games', function () {
    return  view('linkHeader.games');
});

Route::get('/collectibles', function () {
    return  view('linkHeader.collectibles');
});

Route::get('/videos', function () {
    return  view('linkHeader.videos');
});

Route::get('/fans', function () {
    return  view('linkHeader.fans');
});

Route::get('/news', function () {
    return  view('linkHeader.news');
});

Route::get('/shop', function () {
    return  view('linkHeader.shop');
});