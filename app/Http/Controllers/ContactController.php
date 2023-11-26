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
       
        return redirect('/contact')->with('success', 'Message sent successfully!');
        
    }
}
