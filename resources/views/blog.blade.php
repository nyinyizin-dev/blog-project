@extends('layout')

@section('title')
    <title>{{ $blog->title }}</title>
@endsection

@section('content')
    <h1> {{ $blog->title }}</h1>
    <p>published at - {{ $blog->date }}</p>
    <p> {{ $blog->body }}</p>
    <a href="/">go back</a>
@endsection
