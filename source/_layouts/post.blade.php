@extends('_layouts.wrapped')

@section('title', $page->title)

@section('content')
    <div class="mx-auto p-8">
    <article class="bg-white">
        <header class="summary-block w-full mb-8 h-68 relative bg-cover bg-center" style="background-image: url('{{ $page->imgpath }}{{ $page->img }}');">
            <div class="summary-description">
                <div class="leading-normal z-10 absolute pin-b pin-l pin-r pb-2">
                    <h1 class="text-white text-5xl">{{ $page->title }}</h1>
                    <h3 class="text-gold text-2xl">{{ (new \Carbon\Carbon($page->date))->format("F jS, Y") }}</h3>
                </div>
            </div>

        </header>
        <div class="post-content max-w-xl mx-auto text-xl leading-loose p-8">
            @yield('post_content')
        </div>
    </article>

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


