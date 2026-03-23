<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index() {
        $announcements = Announcement::all();
        return view('admin.announcement.index', compact('announcements'));
    }

    public function create() {
        return view('admin.announcement.create');
    }

    public function store(Request $request) {


        Announcement::create($request->all());

        return redirect()->route('admin.announcement.index')
                         ->with('success', 'Announcement created successfully.');
    }
}
