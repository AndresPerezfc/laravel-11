<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        //Paginación en controller con parametro de 3 para limitar la cantidad de post
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('posts.index', compact('posts'));
    }

    // funcion para visuaizar un post a partir de su id
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function store(Request $request){

        //función para creación de posts - Guarda en a Base de datos
        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect('/posts');
    }

    //función para creación de posts
    public function create(){
        return view('posts.create');
    }

    public function edit($post){

        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post){
        $post = Post::find($post);
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect("/posts/{$post->id}");
    }

    public function destroy($post){

        $post = Post::find($post);
        $post->delete();

        return redirect('/posts');
    }
}
