---
imgpath: "/img/platform/"
---

@extends('_layouts.wrapped')
@section('title', 'Transit')

@section('content')

    <h1 class="center">Transit</h1>

    <article class="is-centered post">
        <div class="post-content">
            <p>
                Our transit system can be woefully inconvenient, and expensive, to use so we cannot be surprised when usage
                numbers begin to fall. We need to start making strategic, smart, and <em>real</em> investments in transit, starting with
                addressing the cost of ridership.
            </p>

            @include('_partials.posts.post-embed', [ 'slug' => 'transit-fares-are-too-high'])

            <p>
                Convenience of ridership is also hugely important. Leveraging technology, a field where my expertise lies,
                we can develop much more convenient and <em>realistic</em> routes.
            </p>

            @include('_partials.posts.post-embed', [ 'slug' => 'edmonton-transit-real-time'])

            <p>
                I'm committed to LRT as the backbone of our system, and as someone who has worked with technology his whole
                life, I won't get distracted by snake-oil promises offered up by self-driving car advocates. We can't compromise
                on our LRT and we need that transit backbone to serve our city.
            </p>

            @include('_partials.posts.post-embed', [ 'slug' => 'self-driving-cars-will-not-solve-transit'])

            <p>
                Let's invest in transit.
            </p>

            <a href="/platform">
                <div class="policy-link">Platform</div>
            </a>

        </div>
    </article>

    <h1 class="is-centered">What I've written about it:</h1>
    <div class="blog-archive">
        @foreach($page->tagged($posts, 'transit') as $post)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endforeach
    </div>

@stop
