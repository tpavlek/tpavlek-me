@extends('_layouts.wrapped')
@section('title', 'Open City')

@section('content')

    <h1 class="center">Posts about Council Security</h1>

    <div class="blog-archive">
        @foreach($page->tagged($posts, 'security') as $post)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endforeach
    </div>

@stop
