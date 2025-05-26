<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination; // Mengimpor model Destination

class SearchController extends Controller
{
    public function searchDestination(Request $request)
    {
        $query = $request->input('query'); // Mengambil input 'query' dari form

        // Query ke tabel 'destinations' menggunakan LIKE
        $results = Destination::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->get();

        // Menampilkan view dengan hasil pencarian
        return view('destination.search', compact('results', 'query'));
    }
}
