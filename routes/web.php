<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'homepage']);
})->name("home");

Route::get('/subcription', function () {
    return view('subcription', ['title'=> 'subcription']);
})->name("subcription.user");

Route::get('/historyandstatistics', function () {
    return view('historyandstatistics', ['title'=> 'history and statistics']);
})->name("historyandstatistics.user");

Route::get('/forum', function () {
    return view('forum', ['title'=> 'forum']);
})->name("forum.user");

Route::get('/contact', function () {
    return view('contact', ['title'=> 'contact']);
})->name("contact.user");
