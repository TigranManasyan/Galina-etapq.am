<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function delete($id) {
        $image = Image::findOrFail($id);
        File::delete(public_path('uploads/gallery/' .$image->path));
        if($image->delete()) {
            return redirect()->route('admin.gallery.show', $image->gallery_id)->with('success', 'Նկարը ջնջվել է');
        } else {
            return redirect()->route('admin.gallery.show', $image->gallery_id)->with('fail', 'Նկարը չի ջնջվել');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $image = Image::findOrFail($id);

        // ջնջում ենք հին նկարը
        if (file_exists(public_path('uploads/gallery/' . $image->path))) {
            unlink(public_path('uploads/gallery/' . $image->path));
        }

        // պահում նոր նկարը
        $file = $request->file('image');
//        $name = time() . '_' . $file->getClientOriginalName();
        $name = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();

        $file->move(public_path('uploads/gallery'), $name);

        // update DB
        $image->update([
            'path' => $name
        ]);

        return back()->with('success', 'Նկարը փոխվեց');
    }
}
