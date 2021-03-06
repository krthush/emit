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

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/presskit', function () {
    return redirect()->route('resources');
})->name('presskit');

Route::get('/inperson', function () {
    return view('inperson');
})->name('inperson');

Route::get('/watch/instructions', function () {
    return view('watch-instructions');
})->name('watch-instructions');

Route::get('/watch/android/terms', function () {
    return view('watch-android-terms');
})->name('watch-android-terms');

Route::get('/watch/ios/terms', function () {
    return view('watch-ios-terms');
})->name('watch-ios-terms');

Route::get('/kickstarter', function () {
    return redirect('https://www.kickstarter.com/projects/thush/emit-smartwatch-change-your-perspective-on-time');
})->name('kickstarter');

Route::get('/pitchdeck', function () {
    return redirect('https://1drv.ms/b/s!AgYYSjzpoQzmpFmd4SGe5giBO8b_');
})->name('pitchdeck');

// Route::get('/shop', function () {
//     return redirect('https://emitwatch.myshopify.com/');
// })->name('shop');

// Route for getting user email
Route::post('/subscribe', 'EmailController@store')->name('subscribe');

/* Analytics Routes */
// Route::get('/analytics/view','ActivityController@view')->name('view-json'); // in-development
// Route::get('/analytics/save','ActivityController@save')->name('save-json'); // in-development
// Route::get('/analytics/rebuild','ActivityController@rebuild')->name('rebuild-json'); // in-development
Route::get('/analytics/home','ActivityController@home')->name('home');
Route::get('/analytics/demo', function () { return view('demo'); })->name('demo');
Route::get('/analytics/demo2', function () { return view('demo2'); })->name('demo2');