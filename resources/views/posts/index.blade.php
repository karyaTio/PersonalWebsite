@extends('layouts.master') @section('content')
<div class="container">
    <hr>
    @foreach ($posts as $post)

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

        {{ $post->body }}
    </div>
</div>

@endforeach @endsection
