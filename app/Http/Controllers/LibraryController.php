<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index() {
        $books = Library::all();
        return view('pages.library', compact('books'));
    }
}
