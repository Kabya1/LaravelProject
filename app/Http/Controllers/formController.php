<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    public function create(){
        return view('contact-form');
    }

    public function store(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' =>  'required'
        ]);

        form::create($request->all());
    }
}

