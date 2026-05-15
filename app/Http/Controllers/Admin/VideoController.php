<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }

    public function create() {
        return view('admin.video.create');
    }

    public function store(VideoRequest $request) {
        $data = $request->except('_token');
        $data['user_id'] = Auth::id();
        if(Video::create($data)) {
            return redirect()->route('admin.video.index')->with('success', 'Հայտարարությունը պահպանված է');
        } else {
            return redirect()->back()->with('fail', 'Հայտարարությունը պահպանված չէ');
        }
    }

    public function show($id) {
        $video = Video::findOrFail($id);
        return view('admin.video.edit', compact('video'));
    }

    public function change_status($id, $status) {
        $video = Video::findOrFail($id);
        if($video->update(['published' => $status])) {
            return redirect()->route('admin.video.index')->with('success', 'Կարգավիճակը փոխվել է');
        } else {
            return redirect()->route('admin.video.index')->with('fail', 'Կարգավիճակը չի փոխվել');
        }
    }

    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $video = Video::findOrFail($id);
        if($video->update($data)) {
            return redirect()->route('admin.video.index')->with('success', 'Տվյալները թարմացվել են');
        } else {
            return redirect()->back()->with('fail', 'Տվյալները չեն թարմացվել');
        }

    }

    public function destroy($id) {
        $video = Video::findOrFail($id);
        if($video->delete()) {
            return redirect()->route('admin.video.index')->with('success', 'Հայտարարությունը ջնջվել է');
        } else {
            return redirect()->back()->with('fail', 'Հայտարարությունը չի ջնջվել');
        }
    }
}
