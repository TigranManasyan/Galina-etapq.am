<?php

namespace App\Http\Controllers;

use App\Models\Olympiad;
use Illuminate\Http\Request;

class OlympiadsController extends Controller
{
    public function index() {
        $olympiads = Olympiad::where('published', '=', 1)->get();
        return view('pages.olympiads', compact('olympiads'));
    }
}
