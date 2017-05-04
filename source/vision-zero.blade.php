@extends('_layouts.wrapped')
@section('title', 'Vision Zero')
@section('content')

<h1 style="text-align:center;">Vision Zero</h1>

<article class="is-centered post">
    <div class="post-content">
    
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
            setting Vision Zero as their goal, is still stuck in the old ways of thinking. 
            <a href="/blog/2016/09/18/whos-to-blame-for-pedestrian-collisions">Ad campaigns blame vulnerable users for
            getting hurt</a> and instead of spending on roadway improvements that are proven to work, we spend on 
            <a href="/blog/2016/09/13/edmonton-technolgy-strategy-continues-to-embarass">superfluous
            apps that no one wanted</a>.
        </p>
        <p>
            It's time to get serious about Vision Zero. Obviously, we cannot improve the entire system in a day, but we
            can start by <em>acknowledging where we're lacking, instead of ignoring it</em>. When collisions occur, especially
            if vulnerable users are included, first and foremost city releases should include what roadway design failed
            to allow the situation to occur. Next, we need to act proactively prevent those design issues from causing
            harm in other places on our roadway system, <strong>before</strong> we have a death or injury there.
        </p>
        <p>
            When we improve the road for all users, we make it a better place to be for all users, <em>cars included</em>.
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
    </div>
</article>


<h1 class="is-centered">What I've written about it:</h1>
<div class="blog-archive">
    @foreach($page->tagged($posts, 'vision-zero') as $post)
        @include('_partials.posts.archive-post', [ 'post' => $post ])
    @endforeach
</div>

@stop
