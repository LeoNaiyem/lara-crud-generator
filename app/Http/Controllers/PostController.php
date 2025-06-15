<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('pages.posts.index', compact('posts'));
    }

    public function create()
    {

        return view('pages.posts.create', [
            'mode' => 'create',
            'post' => new Post(),

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Post::create($data);
        return redirect()->route('pages.posts.index')->with('success', 'Successfully created!');
    }

    public function show(Post $post)
    {
        return view('pages.posts.view', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('pages.posts.edit', [
            'mode' => 'edit',
            'post' => $post,

        ]);
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $post->update($data);
        return redirect()->route('pages.posts.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('pages.posts.index')->with('success', 'Successfully deleted!');
    }
}