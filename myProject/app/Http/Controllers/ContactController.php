<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
