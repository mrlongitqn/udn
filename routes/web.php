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
    return view('page.home');
});
Route::get('/intro', function() {
    return view('page.introduce');
});
Route::get('/new', function(){
    return view('page.new');
});
Route::get('/new-detail', function(){
    return view('page.new-detail');
});
Route::get('/new-category', function(){
    return view('page.new-category');
});
Route::get('/ban', function(){
    return view('page.ban');
});
Route::get('/bantochuc', function(){
    return view('page.bantochuc');
});
