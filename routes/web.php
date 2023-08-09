<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;

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
    return view('frontend.index');
});
Route::get('single', function () {
    return view('frontend.single');
});
Route::get('sign', function () {
    return view('frontend.login');
});
Route::get('register', function () {
    return view('frontend.register');
});

Route::get('contact', function () {
    return view('frontend.contact');

});
Route::get('categories', function () {
    return view('frontend.category');
});


// categories routes

Route::resource('categories', 'App\Http\Controllers\categoriesController');
//Routes to direct you to subscription!!!!!!!!!!!!!
// this handles the subscription part of the code in the form....
Route::post('/subscribe', 'App\Http\Controllers\SubscriptionController@subscribe')->name('subscribe');

Route::post('/register', 'RegController@store')->name('register');



Route::post('/subscribe/sports', 'SubscriptionController@subscribe')->name('subscribe_sports');
Route::post('/subscribe/entertainment', 'SubscriptionController@subscribe')->name('subscribe_entertainment');
// Add more routes for each category as needed




