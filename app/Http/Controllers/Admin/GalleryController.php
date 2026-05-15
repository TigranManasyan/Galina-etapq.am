<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index() {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create() {
        return view('admin.gallery.create');
    }

    public function store(GalleryRequest $request) {
        $data = $request->except('_token');
        if(Gallery::create($data)) {
            return redirect()->route('admin.gallery.index')->with('success', 'Հայտարարությունը պահպանված է');
        } else {
            return redirect()->back()->with('fail', 'Հայտարարությունը պահպանված չէ');
        }
    }

    public function show($id) {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.show', compact('gallery'));
    }

    public function change_status($id, $status) {
        $gallery = Gallery::findOrFail($id);
        if($gallery->update(['published' => $status])) {
            return redirect()->route('admin.gallery.index')->with('success', 'Կարգավիճակը փոխվել է');
        } else {
            return redirect()->route('admin.gallery.index')->with('fail', 'Կարգավիճակը չի փոխվել');
        }
    }

    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $gallery = Gallery::findOrFail($id);
        if($gallery->update($data)) {
            return redirect()->route('admin.gallery.index')->with('success', 'Տվյալները թարմացվել են');
        } else {
            return redirect()->back()->with('fail', 'Տվյալները չեն թարմացվել');
        }

    }

    public function attach_view($gallery_id) {
        $gallery = Gallery::findOrFail($gallery_id);
        $galleries = Gallery::all();
        return view('admin.gallery.attach', compact('gallery', 'galleries'));
    }

    public function attach(Request $request) {
        $data = $request->except('_token');
        $gallery = Gallery::findOrFail($request->gallery_id);
        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();
                $path = public_path('uploads/gallery/');
                $image->move($path, $filename);
                $data['path'] = $filename;
                $data['alt'] = rand(1, 100) . time() . '_' . $gallery->name;
                Image::create($data);
            }
        } else {
            return redirect()->back()->with('fail', 'Նկարն ընտրված չէ');
        }
        return redirect()->back()->with('fail', 'Տվյալները պահված են');
    }

    public function destroy($id) {
        $gallery = Gallery::findOrFail($id);
        if($gallery->delete()) {
            return redirect()->route('admin.gallery.index')->with('success', 'Հայտարարությունը ջնջվել է');
        } else {
            return redirect()->back()->with('fail', 'Հայտարարությունը չի ջնջվել');
        }

    }
}
