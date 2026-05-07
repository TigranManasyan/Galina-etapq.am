<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index() {
        return view('pages.professions');
    }
}
