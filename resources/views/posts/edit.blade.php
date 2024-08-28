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

    <form action="{{route('posts.show', $post->slug)}}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">
            Título
            <input type="text" name="title" value="{{$post->title}}">
        </label>

        <label for="category">
            Categoría
            <input type="text" name="category" value="{{$post->category}}">
        </label>

        <br><br>

        <label for="slug">
            Slug
            <input type="text" name="slug" value="{{$post->slug}}">
        </label>

        <br><br>

        <label for="content">
            Contenido
            <textarea name="content" cols="30" rows="10">{{$post->content}}</textarea>
        </label>

        <br><br>

        <button type="submit">
            Editar Post
        </button>

    </form>
</body>
</html>