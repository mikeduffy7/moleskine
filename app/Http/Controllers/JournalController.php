<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class JournalController extends Controller
{
    public function index() {

        // save the contents of the text to local storage 
        // have it save every X seconds
        // save the local storage content to the DB when 


        return view('journal');
    }

    public function store(Request $request) {
        $postRequest = $request->post;
        $journalRequest = 1;

        $entry = new Page();
        $entry->post = $postRequest;
        $entry->journal = $journalRequest;
        
        $entry->save();
        
        return redirect('/journal');
    }
}
