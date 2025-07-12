<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('website.welcome');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/home',function(){
    return view('home1');
});
// Route::get('/demo1',function(){
//     return view('demo1');
// });