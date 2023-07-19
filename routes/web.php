<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/poster', function () {
    return view('poster');
});
Route::get('/estadia', function () {
    return view('estadia');
});
Route::get('/ponentes', function () {
    return view('build');
});
Route::get('/posters', function () {
    return view('posters');
});


Route::get('/contador', function () {
    return view('contador');
});

Route::get('/fetch', function () {
    return view('fetch');
});
Route::get('/apicomentarios28473374487449347458448947473933', function () {
    return view('comentariosapi');
});
Route::get('/comentarios1235869484747484948487499383843943u93434', function () {
    return view('comentarios1235869484747484948487499383843943u93434');
});

Route::get('/callmelikes1235869484747484948487499383843943u93434', function () {
    return view('callmelike');
});


Route::get('/offline', function(){
    return view('offline');
});
