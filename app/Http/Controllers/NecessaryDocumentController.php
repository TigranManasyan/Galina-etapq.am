<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NecessaryDocumentController extends Controller
{
    public function index() {
        return view('pages.necessary_documents');
    }
}
