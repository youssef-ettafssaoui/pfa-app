<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            Post::create([
                'title' => $title = $request->get('title'),
                'slug' => str_slug($title),
                'content' => $request->get('content'),
                'image' => $path,
                'status' => $request->get('status')
            ]);
        }
        return redirect('/dashboard')->with('message', 'Publication créé avec succès !');
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'content' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            Post::where('id', $id)->update([
                'title' => $title = $request->get('title'),
                'content' => $request->get('content'),
                'image' => $path,
                'status' => $request->get('status')
            ]);
        }

        $this->updateAllExceptImage($request, $id);
        return redirect()->back()->with('message', 'Publication a été modifié avec succès !');
    }

    public function updateAllExceptImage(Request $request, $id)
    {
        return Post::where('id', $id)->update([
            'title' => $title = $request->get('title'),
            'content' => $request->get('content'),
            'status' => $request->get('status')
        ]);
    }

    public function destroy(Request $request)
    {

        $id = $request->get('id');
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Publication supprimé avec succès !');
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->paginate(20);
        return view('admin.posts.trash', compact('posts'));
    }
    public function restore($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Publication restauré avec succès !');
    }

    public function toggle($id)
    {
        $post = Post::find($id);
        $post->status = !$post->status;
        $post->save();
        return redirect()->back()->with('message', 'Statut a été modifié avec succès !');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.read', compact('post'));
    }
}