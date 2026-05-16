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

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
})->name('sitemap');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');
