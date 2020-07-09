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
//     return view('welcome');
// });

Route::get('/','TodoController@index');

Route::get('/create/asjdasjkd/asdasdsa/asd/asd/asd/asd/asd/asd/','TodoController@create')->name('todo.create');
Route::post("/addTodo","TodoController@store")->name('todo.store');

Route::get('/update/{todo}','TodoController@edit')->name('todo.update');
Route::put('/update/{todo}','TodoController@update')->name('todo.edit');

