<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Contact;
>>>>>>> 1e6604a (first commit)
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('contact');
=======
        return view('miranda.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => ['required', 'string'],
            'client_phone' => ['required', 'string'],
            'client_email' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'comment' => ['required', 'string'],
        ]);
        $comment = Contact::create(array_merge($validated, [
            'read' => false,
        ]));

        return redirect('/contact')->with('status', 'Thank you for your message!');
>>>>>>> 1e6604a (first commit)
    }
}
