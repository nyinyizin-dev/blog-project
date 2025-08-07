<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{blog}', function ($slug) {
    return view('blog', [
        'blog' => Blog::find($slug)
    ]);
})->where('blog', '[A-z\d\-_]+');
