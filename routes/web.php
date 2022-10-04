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
    $title = 'Home';
    return view('home', ['title' => $title]);
})->name('home');

Route::get('/characters', function () {
    $title = 'Characters';
    return view('characters', ['title' => $title]);
})->name('characters');

Route::get('/comics', function () {
    $title = 'Comics';
    $comics = config('comics');
    return view('comics', ['comics' => $comics, 'title' => $title]);
})->name('comics');

Route::get('/comics/comic-{id}', function($id){
    $comics = config('comics');
    $comic_item = $comics[$id];
    $artists = $comic_item['artists'];
    $writers = $comic_item['writers'];
    $title = $comic_item['title'];
    return view('comic_detail', ['comic_item' => $comic_item, 'title' => $title, 'artists' => $artists, 'writers' => $writers]);
})->name('comicDetail');

Route::get('/movies', function () {
    $title = 'Movies';
    return view('movies', ['title' => $title]);
})->name('movies');

Route::get('/tv', function () {
    $title = 'Tv';
    return view('tv', ['title' => $title]);
})->name('tv');

Route::get('/games', function () {
    $title = 'Games';
    return view('games', ['title' => $title]);
})->name('games');

Route::get('/collectibles', function () {
    $title = 'Collectibles';
    return view('collectibles', ['title' => $title]);
})->name('collectibles');

Route::get('/videos', function () {
    $title = 'Videos';
    return view('videos', ['title' => $title]);
})->name('videos');

Route::get('/fans', function () {
    $title = 'Fans';
    return view('fans', ['title' => $title]);
})->name('fans');

Route::get('/news', function () {
    $title = 'News';
    return view('news', ['title' => $title]);
})->name('news');

Route::get('/shop', function () {
    $title = 'Shop';
    return view('shop', ['title' => $title]);
})->name('shop');
