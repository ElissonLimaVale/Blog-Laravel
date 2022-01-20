<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("Posts.Posts", [ 'posts' => $posts]);
    }

    public function create()
    {
        return view("Posts.Create", [ 'post' => new Post ]);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = 1;
        $post->title = $request->input('title', 'Não Consta');
        $post->description = $request->input('description', 'Não Consta');
        $post->post = $request->input('post', 'Não Consta');
        $post->save();
        return view("Posts.Create", ['post' => new Post]);
    }

    public function edit($id)
    {
        return view("Posts.Edit", [ 'post' => Post::where('id', $id)->first() ]);
    }

    public function update(Request $request)
    {
        $post = Post::find($request->input('id'));
        $post->user_id = 1;
        $post->title = $request->input('title', 'Não Consta');
        $post->description = $request->input('description', 'Não Consta');
        $post->post = $request->input('post', 'Não Consta');
        $post->update();
        return $this->index();
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return $this->index();
    }

}
