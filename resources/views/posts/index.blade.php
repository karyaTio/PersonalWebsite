@extends('layouts.master') @section('content')
    @foreach ($posts as $post)
    <hr>
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

        {!!html_entity_decode($post->body)!!}
    </div>
    @endforeach
 @endsection
