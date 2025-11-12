<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('TailwindPages.contact', [
            'title' => 'Contact'
        ]);
    }
}
