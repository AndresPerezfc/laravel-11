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

    <form action="/posts" method="POST">
        @csrf
        
        <label for="title">
            Título
            <input type="text" name="title">
        </label>

        <label for="category">
            Categoría
            <input type="text" name="category">
        </label>

        <br><br>

        <label for="content">
            Contenido
            <textarea name="content" cols="30" rows="10"></textarea>
        </label>

        <br><br>

        <button type="submit">
            Crear Post
        </button>

    </form>
</body>
</html>