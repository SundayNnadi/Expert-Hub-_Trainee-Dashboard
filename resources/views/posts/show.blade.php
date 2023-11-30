@extends('layouts.app')

@section('content')
    <h1>{{ $blogPost->title }}</h1>
    <p>{{ $blogPost->content }}</p>
    <img src="{{ asset('storage/' . $blogPost->media_path) }}" alt="Post Media">
    <!-- Add comments and reactions here -->
@endsection