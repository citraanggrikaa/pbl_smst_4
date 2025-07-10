<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Suggestion' => 'required',
        ]);

        $data = [
            'name' => $request->input('Name'),
            'suggestion' => $request->input('Suggestion'),
        ];

        Mail::raw(
            "Name: {$data['name']}\nSuggestion: {$data['suggestion']}",
            function ($message) {
                $message->to(['leasehat@gmail.com', 'gungsaraswati2512@gmail.com'])
                        ->subject('Contact Form Suggestion');
            }
        );

        return back()->with('success', 'Successfully submitted!.');
    }
}
