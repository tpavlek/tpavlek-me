@extends('_layouts.wrapped')

@section('title', $page->title)

@section('content')

    <article class="is-centered post">
        <header class="summary-block" style="background-image: url('{{ $page->imgpath }}{{ $page->img }}');">

            <div class="summary-description">
                <div class="text">
                    <span class="title">{{ $page->title }}</span>
                    <span class="date">{{ (new \Carbon\Carbon($page->date))->format("F jS, Y") }}</span>
                </div>
            </div>

        </header>
        <div class="post-content">
            @yield('question_content')
        </div>
    </article>
    <div class="blog-archive">
        @if ($page->getPrevious())
            <h1>Next Post</h1>
            @include('_partials.posts.archive-post', [ 'post' => $page->getPrevious() ])
        @endif
        @if($page->getNext())
            <h1>Previous Post</h1>
            @include('_partials.posts.archive-post', [ 'post' => $page->getNext() ])
        @endif
    </div>
@stop

@section("social_meta")
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="{{ $page->title }}"/>
    <meta property="og:title" content="{{ $page->title }}"/>

    @if($page->description)
        <meta name="twitter:description" content="{{ $page->description }}"/>
        <meta property="og:description" content="{{ $page->description }}"/>
    @else
        <meta name="twitter:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
        <meta property="og:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
    @endif

    @if($page->img)
        <meta name="twitter:image" content="{{ $page->baseUrl }}{{ $page->imgpath }}{{ $page->img }}"/>
        <meta property="og:image" content="{{ $page->baseUrl }}{{ $page->imgpath }}{{ $page->img }}"/>
    @else
        <meta name="twitter:image" content="{{$page->baseUrl}}/img/logo.png"/>
        <meta property="og:image" content="{{$page->baseUrl}}/img/logo.png"/>
    @endif

    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="669489023205771" />
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
@stop


