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
});

Auth::routes();

//User
Route::get('/profile','UserController@edit')->name('user.edit');
Route::post('/profile','UserController@update')->name('user.update');

//Ads
Route::resource('/advertisement','AdvertisementController');
Route::get('myAdvertisement','AdvertisementController@myAds')->name('advertisement.mine');

//Ads Photos
Route::get('/adsPhoto/delete/{id}','AdvertisementPhotoController@destroy')->name('adsPhoto.destroy');

//Bid
Route::resource('bid','BidController');

Route::get('/home', 'HomeController@index')->name('home');
