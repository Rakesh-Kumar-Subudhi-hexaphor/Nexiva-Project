<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'nullable',
            'desc' => 'nullable',


        ]);
        $thumbnailName = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = rand() . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('blog_img'), $thumbnailName);
        }
        $slug = Str::slug($request->title);

        $blog = new Blog();

        $blog->title = $request->input('title');
        $blog->slug = $slug;
        $blog->thumbnail = 'blog_img/' .  $thumbnailName;
        $blog->tag = $request->input('tags_hidden');
        $blog->meta_title = $request->input('meta_title');
        $blog->meta_desc = $request->input('meta_desc');
        $blog->desc = $request->input('desc');
        $blog->save();
        return redirect()->route('admin.blog')->with('success', 'Blog added successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (File::exists($blog->thumbnail)) {
            File::delete($blog->thumbnail);
        }
        $blog->delete();
        return redirect()->back()->with('success', "Blog deleted Successfully");
    }
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        if ($request->hasFile('thumbnail')) {
            if ($blog->thumbnail && File::exists(public_path($blog->thumbnail))) {
                File::delete(public_path($blog->thumbnail));
            }
            $thumbnailName = rand() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('blog_img'), $thumbnailName);
            $blog->thumbnail = 'blog_img/' . $thumbnailName;
        }

        $blog->title       = $request->input('title');
        $blog->slug        = Str::slug($request->title);
        $blog->meta_title  = $request->input('meta_title');
        $blog->meta_desc   = $request->input('meta_desc');
        $blog->desc        = $request->input('desc');
        $blog->tag = $request->input('tags_hidden');
        $blog->save();

        return redirect()->route('admin.blog')->with('success', 'Blog updated successfully!');
    }
}
