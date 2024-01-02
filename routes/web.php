<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('home');

Route::view('/contact', 'contact')->name('contact');
Route::view('/netzero', 'netzero')->name('netzero');
Route::view('/subdivision', 'Subdivision')->name('subdivision');
Route::view('/about', 'About')->name('about');
Route::view('/Villas', 'Villas')->name('villas');
Route::view('/whybelize', 'whybelize')->name('whybelize');
Route::view('/sustainibility', 'sustainibility')->name('sustainibility');
Route::view('/location', 'location')->name('location');
Route::view('/news', 'news')->name('news');
Route::post('/contact-us', [Controller::class, 'index'])->name('contact-us');


