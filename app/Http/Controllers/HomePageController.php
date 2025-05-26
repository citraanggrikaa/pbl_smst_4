<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
       
        return view('home');
    }

    public function destination()
    {
        return view('destination');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        $data = [
            'body' => 'Kami adalah tim yang berkomitmen untuk menghadirkan pengalaman pencarian wisata yang inovatif dan efisien. Dengan teknologi full-text search, Anda dapat menemukan informasi tempat wisata berdasarkan nama, lokasi, kategori, atau bahkan kata kunci spesifik yang Anda inginkan'
        ];
        return view('about', $data);
    }
}
