<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/product/{slug?}', function ($slug = null) {
    return view('pages.product', compact('slug'));
})->name('product');

Route::get('/service/{type?}', function ($type = null) {
    return view('pages.service', compact('type'));
})->name('service');

Route::get('/news/{slug?}', function ($slug = null) {
    return view('pages.news', compact('slug'));
})->name('news');
