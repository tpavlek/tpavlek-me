@extends('_layouts.wrapped')
@section('title', 'Photo Radar Reform')

@section('content')
    <h1 style="text-align:center;">Photo Radar Reform</h1>

    <article class="is-centered post">
        <div class="post-content">

            Edmonton catches a
            <a href="http://edmontonjournal.com/news/local-news/david-staples-citys-aggressive-photo-radar-enforcement-is-greasy-says-former-insider">lot</a>
            <a href="http://edmontonjournal.com/news/local-news/photo-radar-protest-again-to-hit-edmonton-streets">of</a>
            <a href="http://edmontonjournal.com/storyline/david-staples-morinville-mayor-delivers-truth-bomb-about-photo-radar-that-edmonton-council-should-hear">flack</a>
            for its Photo Radar program. I believe automated enforcement has a continuing role to play as a tool in our
            enforcement
            toolbox, but <strong>significant reforms must be made</strong>. You can
            <a href="http://edmontonjournal.com/news/local-news/stats-suggest-more-photo-radar-dollars-should-be-spent-on-infrastructure-fixes-council-hopeful-says">watch
                my video</a>
            on the Edmonton Journal website as I talk about some of the data related to photo radar.

            <blockquote>
                <p>
                    Photo radar locations should be preceeded 150-300m by a digital speedboard.
                </p>
            </blockquote>

            Commonly one hears about the "cash cow" of photo radar - it's hard not to when one of our major daily papers
            publishes
            frequent editorials calling it that. That means when someone recieves a photo radar ticket, their go to
            emotion is
            to dismiss it as a cash grab, rather than learn. <strong>We need the system to show, conclusively, that it's
                not interested
                in tricking citizens to increase revenue</strong>. By mandating locations stay behind a speedboard we
            provide the
            carrot - drivers can adjust their behaviour in the moment when they get feedback that they are speeding. If
            they do
            not... <em>ticket</em>. Only drivers who willfully violated the law after they were told in the moment not
            to are ticketed,
            and the common complaint about transition zones is solved.

            <blockquote>
                <p>
                    Photo radar data should be open, automatically.
                </p>
            </blockquote>

            Without consistent, dilligent auditing by the public we risk abuse of the system. Photo radar locations, the
            enforcement
            hours at those locations, and the number of tickets issued should be published into the open data catalogue
            for anyone
            to view and use no more than a week after enforcement completes at that location.

            <blockquote>
                <p>
                    Infrastructure changes should be made at photo radar locations, until the locations are no longer
                    necessary
                </p>
            </blockquote>

            The City of Edmonton has chosen <a href="/vision-zero">Vision Zero</a> as our traffic safety strategy. That
            means
            we should prioritize infrastructure changes that naturally manage traffic flow and safety. These changes
            should be
            made at problem locations in order to make photo enforcement at those locations no longer necessary.

            <p>
                Areas like the Anthony Henday where infrastructure changes are unlikely to combat unsafe behaviour like
                aggressive lane changing, tailgating and excessive speeding are likely better served through manned
                enforcement
                by police for a wide range of traffic violations.
            </p>

            <p>
                Let's make our automated enforcement system actually <em>work</em> for the citizens and increase traffic
                safety.
            </p>

            <p>
                Elect Troy Pavlek to Edmonton City Council in Ward 11.
            </p>
        </div>
    </article>


    <h1 class="is-centered">What I've written about it:</h1>
    <div class="blog-archive">
        @foreach($page->tagged($posts, 'photo-radar') as $post)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endforeach
    </div>
@stop