<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = new Post();
        $posts = $post->all();
        return view('painel.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::where('type', 'post')->get();
        $users = User::all();
        return view('painel.post.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'category_id' => 'required|integer',
        ]);

        $path = $request->file('photo')->store('post');

        $post = new Post();

        $post->fill($request->all());
        $post->photo = $path;
        $post->save();

        return redirect()->route('post.index')->with('message', 'Post criado!');
    }

    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        $users = User::all();
        $categories = Category::where('type', 'post')->get();
        return view('painel.post.edit', compact('post', 'categories', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'category_id' => 'required|integer',
        ]);

        $path = $request->file('photo')->store('post');

        $post = Post::find($id);
        $post->fill($request->all());
        $post->photo = $path;
        $post->save();

        return redirect()->route('post.index')->with('message', 'Postagem atualizada');
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index')->with('message', 'Postagem deletado');
    }
}
