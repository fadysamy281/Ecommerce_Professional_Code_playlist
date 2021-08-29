<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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


//route::get('sendSms//','HomeController@sendSms');

Route::get('/', function () {
    return view('front.home');
});

Auth::routes();

//Route::get('/home', 'HomeCo
//Route::get('/send-mails', 'HomeController@sendMails');



######################tasks#############

Route::get('offers',[Homecontroller::class ,'createOffer' ]);
Route::post('offers',[Homecontroller::class ,'saveOffer' ])->name('save.users');


Route::get('video',[Homecontroller::class ,'getVideo' ]);
Route::post('video',[Homecontroller::class ,'upload' ])->name('upload.video');




