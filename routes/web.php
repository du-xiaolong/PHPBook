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
    return redirect('/book_list');
});

Route::get('/book_list', 'BookController@bookList');
Route::get('/book_detail/{book}', 'BookController@bookDetail');
Route::get('/addBook', 'BookController@addBook');
Route::post('/storeBook', 'BookController@storeBook');
Route::get('/bookDetail/{book}/digestEdit/{digest}', 'BookController@digestEdit');
Route::post('/updateBookDigest/{book}/{digest}', 'BookController@updateBookDigest');
Route::get('/add_digest/{book}', 'BookController@addDigest');
Route::post('/store_digest', 'BookController@storeDigest');

