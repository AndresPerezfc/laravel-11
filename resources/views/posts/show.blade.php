<a href="/posts">Volver a posts</a>

<h1>Título: {{$post->title}}</h1>

<h3>Contenido:</h3>
<p>
    {{$post->content}}
</p>

<h3>Categoría</h3>
<p>
    {{$post->category}}
</p>

<a href="{{route('posts.edit', $post->id)}}">
    Editar Post
</a>