<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index() {

        // save the contents of the text to local storage 
        // have it save every X seconds
        // save the local storage content to the DB when 


        return view('journal');
    }
}
