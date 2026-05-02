<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    public function index() {
        $documents = Document::all();
        return view('admin.document.index', compact('documents'));
    }

    public function create() {
        return view('admin.document.create');
    }

    public function store(DocumentRequest $request) {
        $data = $request->except('_token');
        if($request->hasFile('doc')) {
            $file = $request->file('doc');
            $name = time() . '.' . $file->getClientOriginalExtension();
            if($file->move(public_path().'/uploads/', $name)) {
                if(Document::create([
                    'name_hy' => $data['name_hy'],
                    'name_en' => $data['name_en'],
                    'path' => $name,
                ])) {
                    return redirect()->route('admin.document.index')->with('success', 'Փաստաթուղթը պահպանված է');
                } else {
                    return redirect()->back()->with('fail', 'Փաստաթուղթը պահպանված չէ');
                }
            } else {
                return redirect()->back()->with('fail', 'Ֆայլի վերբեռնումը ձախողվեց');
            }
        }
    }

    public function edit($id) {
        $document = Document::findOrFail($id);
        return view('admin.document.edit', compact('document'));
    }

    public function update(Request $request, $id) {
        $document = Document::findOrFail($id);
        $data = $request->except('_token');
        if($request->hasFile('doc')) {
            $file = $request->file('doc');
            $name = time() . '.' . $file->getClientOriginalExtension();
            if($file->move(public_path().'/uploads/', $name)) {
                File::delete('uploads/' . $document->path);
                if($document->update([
                    'name_hy' => $data['name_hy'],
                    'name_en' => $data['name_en'],
                    'path' => $name,
                ])) {
                    return redirect()->route('admin.document.index')->with('success', 'Տվյալները թարմացվել են');
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
        $document = Document::findOrFail($id);
        if($document->delete()) {
            File::delete('uploads/' . $document->path);
            return redirect()->route('admin.document.index')->with('success', 'Փաստաթուղթը ջնջվել է');
        } else {
            return redirect()->back()->with('fail', 'Փաստաթուղթը չի ջնջվել');
        }
    }
}
