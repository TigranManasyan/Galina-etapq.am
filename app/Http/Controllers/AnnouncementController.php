<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index() {
        $announcements = Announcement::where('published', '=', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.announcements', compact('announcements'));
    }
}
