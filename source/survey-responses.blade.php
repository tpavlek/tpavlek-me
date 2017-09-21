@extends('_layouts.wrapped')
@section('title', 'Open City')

@section('content')

    <h1 class="center">Survey Responses</h1>

    <article class="is-centered post">
        <div class="post-content">
            <p>
                Since I declared I was running for city council I have received a <em>lot</em> of survey requests. The amount
                of time spent responding to them is a significant investment, and if they're hard to track down that can
                be wasted time.
            </p>

            <p>
                This page is a collection of my survey responses, so you can easily track down and read any of them that
                interest you.
            </p>

            <p>
                Of course if you're just interested in learning what I stand for, my platform is the best place to start.
            </p>

            <a href="/platform">
                <div class="policy-link">Platform</div>
            </a>

        </div>
    </article>


    <h1 class="is-centered">Responses: </h1>
    <div class="blog-archive">
        @foreach($page->tagged($posts, 'survey-response') as $post)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endforeach
    </div>

@stop
