
<x-app-layout>

    <h1 class="text-2xl">Aquí se mostraran todos los posts</h1>

    <a href="{{ route('posts.create') }}">Crear Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post->slug)}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>

    {{-- Paginación con laravel --}}
    {{$posts->links()}}

</x-app-layout>