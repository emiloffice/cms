@extends('layouts.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Zen</a></p>
            {!!$post->content!!}
        </div>
        @foreach($post->comments as $comment)
            <div class="card">
                <div class="card-header">
                    {{  $comment->created_at->diffForHumans() }}
                </div>
            </div>
        @endforeach
    </div>
@endsection