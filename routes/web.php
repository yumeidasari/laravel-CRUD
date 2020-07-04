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

/*Route::get('/', function () {
    return view('home');
});
*/

Route::get('/register', function(){
    return view('register');
});

Route::get('/welcome', function() {
    return view('welcome');
});

Route::post('/welcome', 'AuthController@halo_post');

Route::get('/master', function() {
    return view('adminlte.master');
});

Route::get('/items', function() {
    return view('items.index');
});

Route::get('/items/create', function() {
    return view('items.create');
});

Route::get('/', function() {
    return view('datatable.table');
});


Route::get('/data-tables', function() {
    return view('datatable.table2');
});

//TUGAS CRUD
Route::get('/pertanyaan/{id}/delete', 'PertanyaanController@delete');
Route::resource('/pertanyaan', 'PertanyaanController');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('jawaban/{pertanyaan_id}', 'JawabanController@store');
