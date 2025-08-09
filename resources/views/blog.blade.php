<x-layout>
    <x-slot name="title">
        <title>{{ $blog->title }}</title>
    </x-slot>
    <h1> {{ $blog->title }}</h1>
    <p>published at - {{ $blog->created_at->diffForHumans() }}, <span>Category - <a
                href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></span></p>
    <p> {{ $blog->body }}</p>
    <a href="/">go back</a>

</x-layout>
