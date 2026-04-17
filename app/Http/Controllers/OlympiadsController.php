<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlympiadsController extends Controller
{
    public function index() {
        return view('pages.olympiads');
    }
}
