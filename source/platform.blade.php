---
imgpath: "/img/platform/"
img: "splash-banner.jpg"
title: Platform
description: ""
---

@extends('_layouts.wrapped')

@section('title', $page->title)

@section('content')

    <h1 class="center">{{ $page->title }}</h1>

    <article class="is-centered post">
        <header class="summary-block" style="background-image: url('{{ $page->imgpath }}{{ "launch.jpg" }}');">

            <div class="summary-description">
                <div class="text">
                    <span class="title">{{ $page->title }}</span>
                    <span class="date">Troy's Vision for Ward 11</span>
                </div>
            </div>

        </header>
        <div class="post-content">
            <div class="blog-archive">
                <a href="/vision-zero" class="archive-post page-embed">
                    <div class="img" style="background-image: url('/img/platform/vision-zero.jpg');"></div>
                    <div class="valign-wrapper text-container">
                        <div class="text">
                            <span class="title">Vision Zero</span>
                            <span class="date">End all serious injuries and fatalities in traffic</span>
                        </div>
                    </div>
                </a>
            </div>

            <p>
                We need to stop paying lip service to Vision Zero and take real action. That starts with leadership that can
                understand and commit to the hard work.
            </p>

            <div class="blog-archive">
                <a href="/open-city" class="archive-post page-embed">
                    <div class="img" style="background-image: url('/img/platform/open-city.jpg');"></div>
                    <div class="valign-wrapper text-container">
                        <div class="text">
                            <span class="title">Open City</span>
                            <span class="date">True government openness and transparency, leveraging technology</span>
                        </div>
                    </div>
                </a>
            </div>

            <p>
                When City Council makes a decision, all the data used to make that decision should be publicly available, by
                default, without you or a journalist having to ask.
            </p>

            <div class="blog-archive">
                <a href="/photo-radar-reform" class="archive-post page-embed">
                    <div class="img" style="background-image: url('/img/platform/photo-radar-reform.jpg');"></div>
                    <div class="valign-wrapper text-container">
                        <div class="text">
                            <span class="title">Photo Radar Reform</span>
                            <span class="date">Rebuilding public trust in the program</span>
                        </div>
                    </div>
                </a>
            </div>

            <p>
                The Photo Radar program has lost the public trust. All data relating to the program needs to be made public,
                allowing <em>anyone</em> to audit the program and see where reforms are truly needed.
            </p>

            <div class="blog-archive">
                <a href="/missing-middle" class="archive-post page-embed">
                    <div class="img" style="background-image: url('/img/platform/montreal-row-housing.jpg');"></div>
                    <div class="valign-wrapper text-container">
                        <div class="text">
                            <span class="title">Infill</span>
                            <span class="date">Embracing the missing middle for a more sustainable city</span>
                        </div>
                    </div>
                </a>
            </div>

            <p>
                Missing middle housing like townhomes, stacked row housing, courtyard apartments and low-rise apartments
                can enable us to achieve much more density without compromising human scale characteristics of neighbourhoods.
            </p>

            <div class="blog-archive">
                <a href="/transit" class="archive-post page-embed">
                    <div class="img" style="background-image: url('/img/platform/transit.jpg');"></div>
                    <div class="valign-wrapper text-container">
                        <div class="text">
                            <span class="title">Transit</span>
                            <span class="date">Let's make our transit system competitive with the private car.</span>
                        </div>
                    </div>
                </a>
            </div>

            <p>
                Our transit system is difficult to use, and expensive. We need to make the system an appealing choice,
                rather than a punitive one.
            </p>

            <div class="blog-archive">
                <a href="/residential-speed-limits" class="archive-post page-embed">
                    <div class="img" style="background-image: url('/img/platform/residential-speed-limits.jpg');"></div>
                    <div class="valign-wrapper text-container">
                        <div class="text">
                            <span class="title">Residential Speed Limits</span>
                            <span class="date">50 km/h is too high for communities where people live</span>
                        </div>
                    </div>
                </a>
            </div>

            <p>
                You cannot find a candidate in Ward 11 who has worked harder to make 40km/h in our neighbourhoods a reality.
            </p>

            <hr />

            <p>
                <strong>Note:</strong> This platform is a living document, and is generally just a collection of posts
                that I have already made, so it's easier to see at a glance where I stand.
            </p>

            <p>
                If you have any questions or something isn't addressed here, feel free to reach out. I'm happy to answer
                questions, as I've done in my <a href="https://www.reddit.com/r/Edmonton/comments/5xaway/im_troy_pavlek_and_my_campaign_for_city_council/">reddit AMA</a>, for example.
            </p>

            <blockquote>
                <p>Let's Talk</p>
            </blockquote>

        </div>

    </article>

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
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
@stop
