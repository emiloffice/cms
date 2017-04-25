
@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="{{ action('PostsController@show', [$post->id]) }}">{{  $post->title }}</a>
                </h2>
                <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="/about">Zen</a></p>
                <p>{{ str_limit($post->body, 20) }}</p>
            </div>
        @endforeach
    </div>
    <nav class="blog-pagination">
        <a href="#" class="btn btn-outline-primary">Older</a>
        <a href="#" class="btn btn-outline-secondary disabled">Newer</a>
    </nav>
@stop
