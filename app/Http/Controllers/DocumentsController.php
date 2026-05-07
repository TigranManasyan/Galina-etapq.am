<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index () {
        $documents = Document::all();
        return view('pages.documents', compact('documents'));
    }
}
