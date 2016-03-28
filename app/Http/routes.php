<?php


use App\Http\Controllers\ParGenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarcodeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

     return view('home');
});

#Route::any('/loremipsum', 'ParGenController@anyParagraph');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

     Route::get('/loremipsum', 'ParGenController@getParagraph');
     Route::post('/loremipsum', 'ParGenController@postParagraph');

     Route::get('/profile', 'ProfileController@getProfile');
     Route::post('/profile','ProfileController@postProfile');

     Route::get('/barcode', 'BarcodeController@getBarcode');
     Route::post('/barcode','BarcodeController@postBarcode');

});
