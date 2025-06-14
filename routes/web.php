<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'home']);

Route::get('/about', [HomePageController::class, 'about']);

Route::get('/destinations', [HomePageController::class, 'destinations']);

Route::get('/contact', [HomePageController::class, 'contact']);

Route::get('/destination/{id}', [HomePageController::class, 'single'])->name('destination.single')->where('destination', '[0-9]+') ;




Route::get('/register', function () {
    return view('register');
});

// Route::get('/destination/{slug}', function ($slug) {
//     switch ($slug) {
//         case 'blog-single':
//             return view('blog-single', ['slug' => $slug]);
//         case 'blog-single2':
//             return view('blog-single2', ['slug' => $slug]);
//         case 'blog-single3':
//             return view('blog-single3', ['slug' => $slug]);
//         default:
//             abort(404); // tampilkan halaman tidak ditemukan
//     }
// })->name('destination.single');

use App\Http\Controllers\SearchController;  

// Route::get('/search/destination', [SearchController::class, 'searchDestination'])->name('search.destination');


Route::get('/search', [SearchController::class, 'handleSearch'])->name('search');



