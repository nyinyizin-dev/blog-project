<x-layout>
    <x-hero />
    <x-blog-section :blogs="$blogs" :categories="$categories" :currentCategory="$currentCategory ?? null" />
    <x-subcribe />
</x-layout>
