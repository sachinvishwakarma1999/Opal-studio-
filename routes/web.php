<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('Header');
// });

Route::get('/','Homecontroller@Home');
Route::get('/Home','Homecontroller@Home')->name('Home');
Route::get('/About','Homecontroller@Aboutus');
Route::get('/Contect','Homecontroller@Contect');
Route::any('/sendemail/send','SendEmailController@send');

Route::get('image-cropper','ImageCropperController@index');
Route::post('image-cropper/upload','ImageCropperController@upload');
