<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /*Dashboard Of contact*/
    public function abc(){
        dd('here');
        return view('pages.contact');
    }
}
