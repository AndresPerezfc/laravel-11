<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Creación de Posts</h1>

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

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        
        <label for="title">
            Título
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        @error('title')
            <p>
                {{$message}}
            </p>
        @enderror

        <label for="category">
            Categoría
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <p>
                {{$message}}
            </p>
        @enderror

        <br><br>

        <label for="slug">
            Slug
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
            <p>
                {{$message}}
            </p>
        @enderror

        <br><br>

        <label for="content">
            Contenido
            <textarea name="content" cols="30" rows="10">{{old('content')}}</textarea>
        </label>

        @error('content')
            <p>
                {{$message}}
            </p>
        @enderror

        <br><br>

        <button type="submit">
            Crear Post
        </button>

    </form>
</body>
</html>