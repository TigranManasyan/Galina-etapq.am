<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LibraryRequest;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LibraryController extends Controller
{
    public function index() {
        $books = Library::get();
        return view('admin.library.index', compact('books'));
    }

    public function create() {
        return view('admin.library.create');
    }

    public function store(LibraryRequest $request) {
        $data = $request->except('_token');
        $file = $request->file('book');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $data['path'] = '/uploads/library/' . $name;
        if($file->move(public_path().'/uploads/books/', $name)) {
            if(Library::create($data)) {
                return redirect()->route('admin.library.index')->with('success', 'Փաստաթուղթը պահպանված է');
            } else {
                return redirect()->back()->with('fail', 'Փաստաթուղթը պահպանված չէ');
            }
        } else {
            return redirect()->back()->with('fail', 'Ֆայլի վերբեռնումը ձախողվեց');
        }
    }

    public function edit($id) {
        $book = Library::findOrFail($id);
        return view('admin.library.edit', compact('book'));
    }
    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $book = Library::findOrFail($id);
        if($request->hasFile('book')) {
            $file = $request->file('book');
            $name = time() . '.' . $file->getClientOriginalExtension();
            if($file->move(public_path().'/uploads/books/', $name)) {
                File::delete('uploads/books/' . $book->path);
                if($book->update($data)) {
                    return redirect()->route('admin.library.index')->with('success', 'Տվյալները թարմացվել են');
                } else {
                    return redirect()->back()->with('fail', 'Տվյալները չեն թարմացվել');
                }
            } else {
                return redirect()->back()->with('fail', 'Ֆայլը չի վերբեռնվել');
            }
        } else {
            return redirect()->back()->with('fail', 'Ինչ-որ բան այնպես չանցավ');
        }

    }

    public function destroy($id) {
        $book = Library::findOrFail($id);
        File::delete($book->path);
        if($book->delete()) {
            return redirect()->route('admin.library.index')->with('success', 'Տվյալները ջնջվել են');
        } else {
            return redirect()->back()->with('fail', 'Տվյալները չեն ջնջվել');
        }
    }


}
