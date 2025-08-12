<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/users/{user:username}', function (User $user) {
    return view('blogs', [
        'blogs' =>  $user->blogs,
        'categories' => Category::all()
    ]);
});
