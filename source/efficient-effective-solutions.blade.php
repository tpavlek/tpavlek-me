@extends('_layouts.wrapped')
@section('title', "Efficient, Effective Solutions to Edmonton's Problems")

@section('content')
    <h1 style="text-align:center;">Efficient Effective Solutions</h1>

    <article class="is-centered post">
        <div class="post-content">
            <p>
                Most of my professional experience comes from my role as a software developer. In software, there exist
                some
                well-accepted principles for writing great software within a budget: <em>break down problems into their
                    smallest
                    solveable pieces</em> and <em>don't repeat yourself</em>
            </p>

            <p>
                I believe these same concepts can be applied directly to Edmonton City's Council, which is why I am
                running
                for a seat in Ward 11.
            </p>

            <p>
                You'll often hear that compromises need to be made to reduce taxes by cutting "extra" services that
                aren't
                required. I think we can make Edmonton a great place to live by reducing the tax burden <em>and</em>
                offering
                a slate of great services. We need to make the right investments: across nearly all industries, service
                is
                up and costs are down due to the increase in technology and automation. We need to better leverage
                technology
                to free up employee time to do work that software cannot easily take care of. We need to make the city
                open-first,
                so that citizens and journalists can help in the process of improvement, without burdening resources
                with
                FOIP
                requests. We need to use transportation dollars more effectively: reducing collisions will save more
                money
                than the infrastructure changes cost.
            </p>

            <p>
                Let's start looking at efficient solutions to the problems affecting Edmonton, not just looking at
                "cutting the fat" while doing the same things we've been doing for decades.
            </p>

            <p>
                Elect Troy Pavlek to Edmonton City Council in Ward 11.
            </p>

        </div>
    </article>


    <h1 class="is-centered">What I've written about it:</h1>
    <div class="blog-archive">
        @foreach($page->tagged($posts, 'efficient-effective-solutions') as $post)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endforeach
    </div>

@stop
