<?php

use Illuminate\Support\Facades\Route;
use Dbfx\LaravelStrapi\LaravelStrapi;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});


Route::get('/test', function () {
    $strapi = new LaravelStrapi();
    return $blogs = $strapi->collection('blogs');
});

Route::get('/test/{id}', function ($id) {
    $strapi = new LaravelStrapi();
    return $blogs = $strapi->entry('blogs', $id);
});

Route::get('/blog', [BlogController::class, 'blog']);