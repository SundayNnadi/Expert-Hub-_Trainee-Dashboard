{{-- @extends('layouts.app') --}}

@section('content')
    <h1>Create a Blog Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea>

        <label for="media">Media:</label>
        <input type="file" name="media">

        <button type="submit">Create Post</button>
    </form>
@endsection