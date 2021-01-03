@extends('_layouts.wrapped')
@section('title', 'Vision Zero')
@section('content')

<h1 class="main-heading">Vision Zero</h1>

<article class="mx-auto bg-white shadow">
    <div class="post-content post-text">
    
        <p>
            <a href="http://www.visionzeroinitiative.com/">Vision Zero</a> is the swedish approach to traffic safety that
            follows a single tenant of traffic safety
        </p>
        
        <blockquote>
            <p>
                No loss of life is acceptable.
            </p>
        </blockquote>
        
        <p>
            Vision Zero proposes that humans <em>will fail</em>, therefore the traffic system should expect failure,
            and ensure that human error is not fatal. Vision Zero proposes that traffic safety be implemented through
            roadway design changes.
        </p>
        
        <p>
            Vision Zero is a laudable goal, one that I am 100% behind. However, the City of Edmonton, despite officially
            setting Vision Zero as their goal, is still stuck in the old ways of thinking. Ad campaigns blame vulnerable
            users when they get hurt.

        </p>

        @include('_partials.posts.post-embed', [ 'slug' => 'whos-to-blame-for-pedestrian-collisions' ])

        <p>
            Instead of spending on roadway improvements that are proven to work, we spend on superfluous
            apps that no one wanted.
        </p>

        @include('_partials.posts.post-embed', [ 'slug' => 'edmonton-technology-strategy-continues-to-embarass' ])

        <p>
            Vision Zero will require safe spaces for every mode of transportation. That's why you'll always find me staunchly
            supporting bicycle and walking infrastructure. However, we can't blanket the entire city in separated cycling
            infrastructure overnight (or even in a single term). We need to update laws and specifically enfranchise people
            who bike with their own rules and regulations. Vehicular cycling doesn't work. The Traffic Safety act simply
            omitting bicycles from the language and thinking "everything will be fine" <strong>does not work</strong>.
        </p>

        @include('_partials.posts.post-embed', [ 'slug' => 'idaho-stops-mature-neighbourhoods' ])

        <p>
            It's time to get serious about Vision Zero. Obviously, we cannot improve the entire system in a day, but we
            can start by <em>acknowledging where we're lacking, instead of ignoring it</em>. When collisions occur, especially
            if vulnerable users are included, first and foremost city releases should include what roadway design failed
            to allow the situation to occur. Next, we need to act proactively prevent those design issues from causing
            harm in other places on our roadway system, <strong>before</strong> we have a death or injury there.
        </p>
        <p>
            When we improve the road for all users, we make it a better place to be for all users, <em>drivers of cars included</em>.
            Collisions are a massive burden on our public system, from the inconvenience of road closures, to the police response time,
            to the public health dollars required to care for the injured. Reducing collisions isn't just a moral imperative,
            it's fiscally responsible.
        </p>
        <p>
            Let's make Vision Zero a reality.
        </p>
        <p>
            Elect Troy Pavlek to Edmonton City Council in Ward 11.
        </p>

        <a href="/platform" class="button">
            Platform
        </a>

    </div>
</article>


<h2 class="text-center text-white text-4xl my-8">What I've written about it:</h2>

<div class="">
    @foreach($page->tagged($posts, 'vision-zero') as $post)
        @include('_partials.posts.archive-post', [ 'post' => $post ])
    @endforeach
</div>

@stop
