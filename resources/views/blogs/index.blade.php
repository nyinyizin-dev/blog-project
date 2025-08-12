<x-layout>
    @if (session('success'))
        <div class="alert alert-info text-center"> {{ session('success') }}</div>
    @endif
    <x-hero />
    <x-blog-section :blogs="$blogs" />
    <x-subcribe />
</x-layout>
