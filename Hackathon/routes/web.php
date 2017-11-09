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
//PUBLIC
Auth::routes();
//Ads
Route::resource('/advertisement','AdvertisementController');
Route::get('notAdmin','HomeController@notAdmin')->name('notAdmin');
// Survey
Route::get('/survey','SurveyController@create')->name('survey');
Route::post('/survey','SurveyController@store')->name('survey');
Route::get('surveyResult','SurveyController@index')->name('survey.result');

Route::group(['middleware' => ['auth']], function () {
  //User
  Route::get('/profile','UserController@edit')->name('user.edit');
  Route::post('/profile','UserController@update')->name('user.update');
  //Ads
  Route::get('myAdvertisement','AdvertisementController@myAds')->name('advertisement.mine');
  //Ads Photos
  Route::get('/adsPhoto/delete/{id}','AdvertisementPhotoController@destroy')->name('adsPhoto.destroy');
  //Bid
  Route::post('bid','BidController@store')->name('bid.store');
  Route::get('bid/mine','BidController@mine')->name('bid.mine');
  Route::get('bid/choosen','BidController@choosen')->name('bid.choosen');
  Route::get('bid/confirmation','BidController@confirmation')->name('bid.confirmation');
  Route::get('bid/ongoing','BidController@ongoing')->name('bid.ongoing');
  Route::get('bid/done','BidController@done')->name('bid.done');

  Route::post('bid/confirmation','BidController@updateConfirmation')->name('bid.updateConfirmation');
  Route::get('bid/update/{id}/{status}','BidController@update')->name('bid.update');

  //Transaction
  Route::get('transaction/create/{bidId}/{advertisementId}','TransactionController@store')->name('transaction.store');

  Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware' => ['admin']], function () {
  Route::get('admin','HomeController@admin')->name('home.admin');
  //User
  Route::get('list/users','UserController@index')->name('user.index');
  //Advertisement
  Route::get('list/advertisement','AdminController@advertisement')->name('admin.advertisement');
  Route::get('list/advertisement/{advertisement}','AdminController@advertisementShow')->name('admin.advertisementShow');
  //Bid
  Route::get('list/bid/ongoing','AdminController@bidOngoing')->name('admin.bidOngoing');
  Route::get('list/bid/pay','AdminController@bidPay')->name('admin.bidPay');
  Route::get('list/bid/done','AdminController@bidDone')->name('admin.bidDone');
});
