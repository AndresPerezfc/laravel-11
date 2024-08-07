
<x-app-layout>

    <h1>Aquí se mostraran todos los posts</h1>

    <a href="{{ route('posts.create') }}">Crear Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post->id)}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>

</x-app-layout>