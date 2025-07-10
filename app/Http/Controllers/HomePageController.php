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
        $data = [
            'destinations' => Destination::paginate(27),
            'query' => null
        ];


        return view('destination', $data);
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
            'body' => 'We are a dedicated team committed to delivering an innovative and efficient travel search experience. With full-text search technology, you can easily find information about tourist destinations based on name, location, category, or even specific keywords that match your interests.'
        ];
        return view('about', $data);
    }
}
