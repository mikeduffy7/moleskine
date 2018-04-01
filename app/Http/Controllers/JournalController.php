<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;

class JournalController extends Controller
{
    public function index() {
        $journals = Journal::all();

        return view('journals.index', ['journals' => $journals]);
    }

    // create a journal that will have a title

    /* 
    * inside of each journal, there will be pages that will  
    * be created and stored to be kept inside
    * of the journal
    */ 

    public function create(Request $request) {
        $titleRequest = $request->title;
        $journal = new Journal();

        $journal->title = $titleRequest;
        $journal->pages = '[0,1]';

        $journal->save();

        return redirect('journal');
    }

}
