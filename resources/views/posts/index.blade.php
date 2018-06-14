@extends('templates.master')

@section('head')
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">A Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most
            interesting in this post's contents.</p>
        <p class="lead mb-0">
            <a href="#" class="text-white font-weight-bold">Continue reading...</a>
        </p>
    </div>
</div>
@endsection


@section('content')
@foreach ($posts as $post)

<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

    {{ $post->body }}
</div>
<!-- /.blog-post -->

@endforeach

@endsection
