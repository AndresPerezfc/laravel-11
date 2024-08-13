<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    // funcion para visuaizar un post
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function store(Request $request){

        //función para creación de posts
        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect('/posts');
    }

    public function create(){
        return view('posts.create');
    }
}
