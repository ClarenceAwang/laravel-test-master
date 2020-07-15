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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Landing_page', 'LandingController@landing')->name('home');
Route::get('/dr-mundo-poster', 'Details1Controller@Details')->name('Dr Mundo Poster');
Route::get('/star-wars-poster', 'Details2Controller@Details')->name('Star Wars Poster');
Route::get('/dine-and-dash-poster', 'Details3Controller@Details')->name('Dine and Dash Poster');
Route::get('/cat-poster', 'Details4Controller@Details')->name('Cat poster');
Route::get('/deadpool-poster', 'Details5Controller@Details')->name('Deadpool Poster');
Route::get('/my-neighbor-totoro-poster', 'Details6Controller@Details')->name('My Neighbor Totoro Poster');
Route::get('/Add-to-cart', 'CartController@Cart')->name('Add to Cart');
Route::get('/Cart.php', 'CartController@Cart')->name('Add to Cart');
Route::get('Add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);