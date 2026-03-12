<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        $data = [
            'Name: ' . $request->input('name'),
            'Email: ' . $request->input('email'),
            'Message: ' . $request->input('message'),
            '--------------------------'
        ];

        $text = implode("\n", $data);

        file_put_contents(storage_path('app/contact_messages.txt'), $text . "\n", FILE_APPEND);

        return redirect()->route('contact')->with('success', 'Message sent!');
    }
}
