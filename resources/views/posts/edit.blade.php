<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Post</title>
</head>
<body>
    <h1>Edición de Posts</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}    
                    </li>  
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.show', $post->slug)}}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">
            Título
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>

        <label for="category">
            Categoría
            <input type="text" name="category" value="{{old('category', $post->category)}}">
        </label>

        <br><br>

        <label for="slug">
            Slug
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>

        <br><br>

        <label for="content">
            Contenido
            <textarea name="content" cols="30" rows="10">{{old('content', $post->content)}}</textarea>
        </label>

        <br><br>

        <button type="submit">
            Editar Post
        </button>

    </form>
</body>
</html>