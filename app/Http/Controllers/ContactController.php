<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return 'Contact us!';
    }

    public function store(Request $request)
    {
        // Logic to store contact form data
        return 'Contact form submitted successfully!';
    }
}
