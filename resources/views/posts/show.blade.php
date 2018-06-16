@extends('layouts.master') @section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}
        <a href="#">Mark</a>
    </p>

    {{ $post->body }}
</div>
<!-- /.blog-post -->
@endsection
