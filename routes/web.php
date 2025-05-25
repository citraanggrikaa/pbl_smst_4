<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/destination/{slug}', function ($slug) {
    switch ($slug) {
        case 'blog-single':
            return view('blog-single', ['slug' => $slug]);
        case 'blog-single2':
            return view('blog-single2', ['slug' => $slug]);
        case 'blog-single3':
            return view('blog-single3', ['slug' => $slug]);
        default:
            abort(404); // tampilkan halaman tidak ditemukan
    }
})->name('destination.single');




