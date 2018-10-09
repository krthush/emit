<?php

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
})->name('welcome');

Route::get('/licenses', function () {
    return view('licenses');
})->name('licenses');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/presskit', function () {
    return view('presskit');
})->name('presskit');

// Route::get('/shop', function () {
//     return redirect('https://emitwatch.myshopify.com/');
// })->name('shop');

// Route for getting user email
Route::post('/subscribe', 'EmailController@store')->name('subscribe');
