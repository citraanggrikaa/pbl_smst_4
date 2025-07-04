<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()  // Changed from index() to home()
    {
        $destinations = Destination::all();
        return view('home', compact('destinations'));
    }


    public function single($id)
    {
        $data = [
            'destination' => Destination::find($id)
        ];
        return view('blog-single', $data);
    }

    public function destinations()
    {
        $destinations = Destination::paginate(6); // 6 destinasi per halaman
        return view('destination', compact('destinations'));
    }


    public function contact()
    {
        $data = [
            'contact' => Destination::all()
        ];
        return view('contact', $data);
    }

    public function about()
    {
        $data = [
            'body' => 'Kami adalah tim yang berkomitmen untuk menghadirkan pengalaman pencarian wisata yang inovatif dan efisien. Dengan teknologi full-text search, Anda dapat menemukan informasi tempat wisata berdasarkan nama, lokasi, kategori, atau bahkan kata kunci spesifik yang Anda inginkan'
        ];
        return view('about', $data);
    }
}
