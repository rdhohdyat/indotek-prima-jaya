<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

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

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/news/future-of-industrial-automation', function () {
    return view('pages.news-detail');
})->name('news.detail');
