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

Route::get('/', 'indexCont@getIndex')->name('site.getIndex');
Route::get('/index','indexCont@getKitap')->name('site.getKitap');
Route::get('/ekran','indexCont@getEkran')->name('site.getEkran');
Route::post('/ekran', 'indexCont@postEkran')->name('site.postEkran');
Route::get('/tur','indexCont@getTur')->name('site.gettur');
Route::get('/turE','indexCont@getturE')->name('site.getturE');
Route::post('/turE','indexCont@postturE')->name('site.postturE');
Route::get('/yayın','indexCont@getYayın')->name('site.getYayın');
Route::get('/yayınE','indexCont@getyayınE')->name('site.getyayınE');
Route::post('/yayınE','indexCont@postyayınE')->name('site.postyayınE');
Route::get('/yazar','indexCont@getYazar')->name('site.getYazar');
Route::get('/yazarE','indexCont@getyazarE')->name('site.getyazarE');
Route::post('/yazarE', 'indexCont@postyazarE')->name('site.postyazarE');