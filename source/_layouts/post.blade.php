@extends('_layouts.wrapped')

@section('title', $page->title)

@section('content')
<div class="mx-auto p-1 lg:p-8">

    @include('_partials.posts.post-body', [ 'img' => $page->imgpath.$page->img, 'title' => $page->title, 'date' => $page->date, 'photo_credit' => $page->photo_credit ])

    <div class="blog-archive">
        @if ($page->getPrevious())
            <h1 class="text-white my-4">Next Post</h1>
            @include('_partials.posts.archive-post', [ 'post' => $page->getPrevious() ])
        @endif
        @if($page->getNext())
            <h1 class="text-white my-4">Previous Post</h1>
            @include('_partials.posts.archive-post', [ 'post' => $page->getNext() ])
        @endif
    </div>
</div>


@stop

@section("social_meta")
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="{{ $page->title }}"/>
    <meta property="og:title" content="{{ $page->title }}"/>

    <meta name="twitter:description" content="{{ $page->description }}"/>
    <meta property="og:description" content="{{ $page->description }}"/>

    @if($page->img)
        <meta name="twitter:image" content="{{ $page->baseUrl }}{{ $page->imgpath }}{{ $page->img }}"/>
        <meta property="og:image" content="{{ $page->baseUrl }}{{ $page->imgpath }}{{ $page->img }}"/>
    @else
        <meta name="twitter:image" content="{{$page->baseUrl}}/img/logo.png"/>
        <meta property="og:image" content="{{$page->baseUrl}}/img/logo.png"/>
    @endif

    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
@stop


