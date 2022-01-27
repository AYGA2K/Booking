<?php

use App\Http\Controllers\contact;
use App\Http\Controllers\hotel_bookingcontroller;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\stockcontroller;
use App\Http\Controllers\villa_bookingcontroller;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoombookingController;
use App\Http\Controllers\roomcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VillaController; 
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard','App\Http\Controllers\DashbordController@index')->name('dashboard');
});


Route::group(['middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard/profile','App\Http\Controllers\DashbordController@profile')->name('dashboard.profile');
});



Route::group(['middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard/profilee','App\Http\Controllers\DashbordController@profilee')->name('dashboard.profilee');
});

Route::group(['middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard/stays','App\Http\Controllers\DashbordController@stays')->name('dashboard.stays');
});


Route::group(['middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard/stayss','App\Http\Controllers\DashbordController@stayss')->name('dashboard.stayss');
});



Route::group(['middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard/contact','App\Http\Controllers\DashbordController@contact')->name('dashboard.contact');
});

Route::group(['middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard/about','App\Http\Controllers\DashbordController@about')->name('dashboard.about');
});

Route::group(['middleware'=>['auth','role:admin']],function(){
    Route::get('/dashboard_home','App\Http\Controllers\DashbordController@index')->name('dashboard_home');
});


Route::group(['middleware'=>['auth','role:admin']],function(){
    Route::get('/dashboard_admin','App\Http\Controllers\HotelController@index')->name('dashboard_admin');
});

Route::group(['middleware'=>['auth','role:admin']],function(){
    Route::get('/dashboard_adminn','App\Http\Controllers\VillaController@index')->name('dashboard_adminn');
});



Route::resource('Hotels',HotelController::class );
Route::resource('Rooms',roomcontroller::class );
Route::resource('hotels',hotel_bookingcontroller::class );

Route::resource('rooms',RoombookingController::class );
Route::resource('contacts',contact::class );

Route::resource('Villas',VillaController::class );
Route::resource('villas',villa_bookingcontroller::class );
Route::resource('stock',stockcontroller::class );









require __DIR__.'/auth.php';