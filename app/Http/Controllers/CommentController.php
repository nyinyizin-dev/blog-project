<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'body' => 'required|min:10'
        ]);
        // comment store
        $blog->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);

        $subscribers = $blog->subscribers->filter(fn($subscriber) => $subscriber->id !== auth()->id());

        $subscribers->each(function ($subscriber) use($blog)
        {
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
        });

        return redirect('/blogs/' . $blog->slug);
    }
}
