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

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', 'PostsController@index')->name('top');

Route::resource('posts', 'PostsController', ['only' => ['create', 'store','show', 'edit', 'update','destroy']]);

Route::resource('comments', 'CommentsController', ['only' => ['store']]);




// リスト２−３
Route::get('hello',function(){
  return '<html><body><h1>Hello</h1><p>This is sample page.
  </p></body></html>';
});


Route::get('oppai','oppaicontroller@oppai');
