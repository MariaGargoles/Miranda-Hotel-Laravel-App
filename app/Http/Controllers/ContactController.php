<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_phone' => 'required|string|max:15',
            'client_email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'comment' => 'required|string',
            
        ]);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
