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

Route::get('/books/addbook', function(){
    return view('books.create');
})->middleware('auth');

Route::post('/books/create', [
   'uses' => 'BooksController@createBook',
   'as' => 'book.create',
   'middleware' => 'auth'
]);

Route::get('/books/delete/{id}', [
    'uses' => 'BooksController@removeBook',
    'as' => 'book.delete',
    'middleware' => 'auth'
]);


Route::get('/books/author',[
    'uses' => 'BooksController@author',
    'as' => 'book.author',
    'middleware' => 'auth'
]);

Route::get('/books/title',[
    'uses' => 'BooksController@title',
    'as' => 'book.author',
    'middleware' => 'auth'
]);

Route::get('/books/published',[
    'uses' => 'BooksController@published',
    'as' => 'book.author',
    'middleware' => 'auth'
]);

Route::get('/books/full/{id}',[
    'uses' => 'BooksController@fullBook',
    'as' => 'book.full',
    'middleware' => 'auth'
]);

Route::get('/books', 'BooksController@index')->middleware('auth');
