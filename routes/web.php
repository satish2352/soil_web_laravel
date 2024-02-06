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

Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
Route::get('/vision-mission', ['as' => 'vision-mission', 'uses' => 'App\Http\Controllers\Website\VisionMissionController@index']);
Route::get('/about-us', ['as' => 'about-us', 'uses' => 'App\Http\Controllers\Website\AboutUsController@index']);
Route::get('/our-team', ['as' => 'our-team', 'uses' => 'App\Http\Controllers\Website\OurTeamController@index']);
Route::get('/photo-gallery', ['as' => 'photo-gallery', 'uses' => 'App\Http\Controllers\Website\PhotoGallery@index']);
Route::get('/vedio-gallery', ['as' => 'vedio-gallery', 'uses' => 'App\Http\Controllers\Website\VideoGallery@index']);
Route::get('/products', ['as' => 'products', 'uses' => 'App\Http\Controllers\Website\ProductController@index']);
Route::get('/careers', ['as' => 'careers', 'uses' => 'App\Http\Controllers\Website\CareerController@index']);
Route::get('/blogs', ['as' => 'blogs', 'uses' => 'App\Http\Controllers\Website\BlogController@index']);

Route::post('/internship_form_submit', ['as' => 'internship_form_submit', 'uses' => 'App\Http\Controllers\Website\CareerController@frontinternshipadd']);
Route::post('/frontjobpostingadd', ['as' => 'frontjobpostingadd', 'uses' => 'App\Http\Controllers\Website\CareerController@frontjobpostingadd']);
Route::post('/frontdistributorregistration', ['as' => 'frontdistributorregistration', 'uses' => 'App\Http\Controllers\Website\CareerController@frontdistributorregistration']);
Route::post('/districtlist', ['as' => 'districtlist', 'uses' => 'App\Http\Controllers\Website\CareerController@districtlist']);
Route::post('/talukalist', ['as' => 'talukalist', 'uses' => 'App\Http\Controllers\Website\CareerController@talukalist']);
Route::post('/villagelist', ['as' => 'villagelist', 'uses' => 'App\Http\Controllers\Website\CareerController@villagelist']);