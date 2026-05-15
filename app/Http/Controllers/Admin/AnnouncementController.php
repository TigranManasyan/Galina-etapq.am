<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AnnouncementController extends Controller
{
    public function index() {
        $announcements = Announcement::all();
        return view('admin.announcement.index', compact('announcements'));
    }

    public function create() {
        return view('admin.announcement.create');
    }

    public function store(AnnouncementRequest $request) {
        $data = $request->except('_token');
        $data['user_id'] = Auth::id();
        if($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['cover_photo'] = $name;
            if($file->move(public_path().'/uploads/announcements/', $name)) {
                if(Announcement::create($data)) {
                    return redirect()->route('admin.announcement.index')->with('success', 'Հայտարարությունը պահպանված է');
                } else {
                    return redirect()->back()->with('fail', 'Հայտարարությունը պահպանված չէ');
                }
            } else {
                return redirect()->back()->with('fail', 'Ֆայլի վերբեռնումը ձախողվեց');
            }
        }

    }

    public function show($id) {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcement.edit', compact('announcement'));
    }

    public function change_status($id, $status) {
        $announcement = Announcement::findOrFail($id);
        if($announcement->update(['published' => $status])) {
            return redirect()->route('admin.announcement.index')->with('success', 'Կարգավիճակը փոխվել է');
        } else {
            return redirect()->route('admin.announcement.index')->with('fail', 'Կարգավիճակը չի փոխվել');
        }
    }

    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $announcement = Announcement::findOrFail($id);
        $name = '';
        if($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['cover_photo'] = $name;
            if($file->move(public_path().'/uploads/announcements/', $name)) {
                File::delete('uploads/announcements/' . $announcement->cover_photo);
            } else {
                return redirect()->back()->with('fail', 'Ֆայլը չի վերբեռնվել');
            }
        }

        if($announcement->update($data)) {
            return redirect()->route('admin.announcement.index')->with('success', 'Տվյալները թարմացվել են');
        } else {
            return redirect()->back()->with('fail', 'Տվյալները չեն թարմացվել');
        }

    }

    public function destroy($id) {
        $announcement = Announcement::findOrFail($id);
        File::delete('uploads/announcements/' . $announcement->cover_photo);
        if($announcement->delete()) {
            return redirect()->route('admin.announcement.index')->with('success', 'Հայտարարությունը ջնջվել է');
        } else {
            return redirect()->back()->with('fail', 'Հայտարարությունը չի ջնջվել');
        }
    }
}
