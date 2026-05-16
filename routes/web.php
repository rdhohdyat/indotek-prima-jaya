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

Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/news/future-of-industrial-automation', function () {
    return view('pages.news-detail');
})->name('news.detail');
