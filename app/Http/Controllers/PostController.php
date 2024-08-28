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


        /*$post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save(); */ 


        Post::create($request->all());

        return redirect()->route('posts.index');
        //redirección al nombre de la ruta
    }

    //función para creación de posts
    public function create(){
        return view('posts.create');
    }

    public function edit(Post $post){

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        /*$post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save(); */

        $post->update($request->all());

        //return redirect("/posts/{$post->id}");
        return redirect()->route('posts.show', $post->slug);
    }

    public function destroy(Post $post){

        //dentro de los parametros de la función podemos agregar el modelo Post y ahorrarnos el $post = Post::find($post); Ya que siempre busca por el Id
        $post->delete();

        return redirect()->route('posts.index');
    }
}
