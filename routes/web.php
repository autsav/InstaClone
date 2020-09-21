<?php

use App\Http\Controllers\ProfilesController;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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





// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{user}','App\Http\Controllers\ProfilesController@index')->name('profile.show');

 Route::middleware('auth')->get('/profile/{user}','App\Http\Controllers\ProfilesController@index')->name('profile.show');

// Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index', function () {
    
// })->name('profile.show');
Route::get('email', function(){
    return new NewUserWelcomeMail();
});
Route::get('follow/{user}', 'App\Http\Controllers\FollowsController@store')->name('follow.user');

Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'App\Http\Controllers\ProfilesController@update')->name('profile.update');
Route::get('/', 'App\Http\Controllers\PostsController@index' );
Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::post('/p', 'App\Http\Controllers\PostsController@store');

Route::get('/p/{post}', 'App\Http\Controllers\PostsController@show');

