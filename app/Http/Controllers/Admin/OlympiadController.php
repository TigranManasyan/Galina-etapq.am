<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OlympiadRequest;
use App\Models\Olympiad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OlympiadController extends Controller
{
    public function index() {
        $olympiads = Olympiad::all();
        return view('admin.olympiad.index', compact('olympiads'));
    }
    public function create() {
        return view('admin.olympiad.create');
    }
    public function store(OlympiadRequest $request) {
        $data = $request->except('_token');
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['cover'] = $name;
            if($file->move(public_path().'/uploads/olympiads/', $name)) {
                if(Olympiad::create($data)) {
                    return redirect()->route('admin.olympiad.index')->with('success', 'Պահպանված է');
                } else {
                    return redirect()->back()->with('fail', 'Չի պահպանվել');
                }
            } else {
                return redirect()->back()->with('fail', 'Ֆայլի վերբեռնումը ձախողվեց');
            }
        }
    }

    public function change_status($id, $status) {
        $olympiad = Olympiad::findOrFail($id);
        if($olympiad->update(['published' => $status])) {
            return redirect()->route('admin.olympiad.index')->with('success', 'Կարգավիճակը փոխվել է');
        } else {
            return redirect()->route('admin.olympiad.index')->with('fail', 'Կարգավիճակը չի փոխվել');
        }
    }

    public function show($id) {
        $olympiad = Olympiad::findOrFail($id);
        return view('admin.olympiad.edit', compact('olympiad'));
    }

    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $olympiad = Olympiad::findOrFail($id);


        $name = '';
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['cover'] = $name;
            if($file->move(public_path().'/uploads/articles/', $name)) {
                File::delete('uploads/olympiads/' . $olympiad->cover);
            } else {
                return redirect()->back()->with('fail', 'Ֆայլը չի վերբեռնվել');
            }
        }

        if($olympiad->update($data)) {
            return redirect()->route('admin.olympiad.index')->with('success', 'Պահպանված է');
        } else {
            return redirect()->back()->with('fail', 'Չի պահպանվել');
        }
    }

    public function destroy($id) {

    }
}
