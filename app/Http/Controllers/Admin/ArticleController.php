<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    public function create() {
        return view('admin.article.create');
    }

    public function store(Request $request) {
        $data = $request->except('_token');
        $data['user_id'] = Auth::id();
        if($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['cover_photo'] = $name;
            if($file->move(public_path().'/uploads/articles/', $name)) {
                if(Article::create($data)) {
                    return redirect()->route('admin.article.index')->with('success', 'Փաստաթուղթը պահպանված է');
                } else {
                    return redirect()->back()->with('fail', 'Փաստաթուղթը պահպանված չէ');
                }
            } else {
                return redirect()->back()->with('fail', 'Ֆայլի վերբեռնումը ձախողվեց');
            }
        }
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    public function change_status($id, $status) {
        $article = Article::findOrFail($id);
        if($article->update(['published' => $status])) {
            return redirect()->route('admin.article.index')->with('success', 'Կարգավիճակը փոխվել է');
        } else {
            return redirect()->route('admin.article.index')->with('fail', 'Կարգավիճակը չի փոխվել');
        }
    }

    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $article = Article::findOrFail($id);
        $name = '';
        if($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['cover_photo'] = $name;
            if($file->move(public_path().'/uploads/articles/', $name)) {
                File::delete('uploads/articles/' . $article->cover_photo);
            } else {
                return redirect()->back()->with('fail', 'Ֆայլը չի վերբեռնվել');
            }
        }

        if($article->update($data)) {
            return redirect()->route('admin.article.index')->with('success', 'Տվյալները թարմացվել են');
        } else {
            return redirect()->back()->with('fail', 'Տվյալները չեն թարմացվել');
        }

    }

    public function destroy($id) {
        $article = Article::findOrFail($id);
        File::delete('uploads/articles/' . $article->cover_photo);
        if($article->delete()) {
            return redirect()->route('admin.article.index')->with('success', 'Article-ը ջնջվել է');
        } else {
            return redirect()->back()->with('fail', 'Article-ը չի ջնջվել');
        }
    }
}
