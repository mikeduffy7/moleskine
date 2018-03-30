<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;

class JournalController extends Controller
{
    public function index() {
        return view('journals.index');
    }

    // create a journal that will have a title

    /* 
    * inside of each journal, there will be pages that will  
    * be created and stored to be kept inside
    * of the journal
    */ 

}
