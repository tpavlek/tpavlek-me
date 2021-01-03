---
imgpath: "/img/platform/"
img: "splash-banner.jpg"
title: Platform for the 2017 Edmonton municipal election
description: "A blueprint for becoming an unelectable fringe candidate"
---

@extends('_layouts.wrapped')

@section('title', $page->title)

@section('content')

    <article class="mx-auto bg-white shadow">
        <header class="w-full mb-8 h-96 relative bg-cover bg-center" style="background-image: url('{{ $page->imgpath }}{{ "launch.jpg" }}');">

            <div class="summary-description">
                <div class="leading-normal z-10 absolute bottom-0 left-0 right-0 pb-2">
                    <h2 class="text-white text-5xl">{{ $page->title }}</h2>
                    <h3 class="text-gold text-2xl">Troy's Vision for Ward 11</h3>
                </div>
            </div>

        </header>
        <div class="post-content max-w-5xl mx-auto text-xl leading-loose p-8">
            <div class="-mx-8">
                @include('_partials.page.embed', [ 'embed_page' => (object)[
                    'url' => '/vision-zero',
                    'img' => '/img/platform/vision-zero.jpg',
                    'title' => 'Vision Zero',
                    'sub_title' => 'End all serious injuries and fatalities in traffic'
                ]])
            </div>

            <p>
                We need to stop paying lip service to Vision Zero and take real action. That starts with leadership that can
                understand and commit to the hard work.
            </p>

            <div class="-mx-8">
                @include("_partials.page.embed", [ 'embed_page' => (object)[
                    'url' => '/open-city',
                    'img' => '/img/platform/open-city.jpg',
                    'title' => 'Open City',
                    'sub_title' => 'True government openness and transparency, leveraging technology'
                ]])
            </div>

            <p>
                When City Council makes a decision, all the data used to make that decision should be publicly available, by
                default, without you or a journalist having to ask.
            </p>

            <div class="-mx-8">
                @include("_partials.page.embed", [ 'embed_page' => (object)[
                    'url' => '/photo-radar-reform',
                    'img' => '/img/platform/photo-radar-reform.jpg',
                    'title' => 'Photo Radar Reform',
                    'sub_title' => 'Rebuilding public trust in the program'
                ]])
            </div>

            <p>
                The Photo Radar program has lost the public trust. All data relating to the program needs to be made public,
                allowing <em>anyone</em> to audit the program and see where reforms are truly needed.
            </p>

            <div class="-mx-8">
                @include("_partials.page.embed", [ 'embed_page' => (object)[
                    'url' => '/missing-middle',
                    'img' => '/img/platform/infill.jpg',
                    'title' => 'Infill',
                    'sub_title' => 'Embracing the missing middle for a more sustainable city'
                ]])
            </div>

            <p>
                Missing middle housing like townhomes, stacked row housing, courtyard apartments and low-rise apartments
                can enable us to achieve much more density without compromising human scale characteristics of neighbourhoods.
            </p>

            <div class="-mx-8">
                @include("_partials.page.embed", [ 'embed_page' => (object)[
                   'url' => '/transit',
                   'img' => '/img/platform/transit.jpg',
                   'title' => 'Transit',
                   'sub_title' => "Let's make our transit system competitive with the private car"
               ]])
            </div>

            <p>
                Our transit system is difficult to use, and expensive. We need to make the system an appealing choice,
                rather than a punitive one.
            </p>

            <div class="-mx-8">
                @include("_partials.page.embed", [ 'embed_page' => (object)[
                   'url' => '/residential-speed-limits',
                   'img' => '/img/platform/residential-speed-limits.jpg',
                   'title' => 'Residential Speed Limits',
                   'sub_title' => "50 km/h is too high for communities where people live"
               ]])
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
    @component('_partials.social_meta', [ 'page' => $page ])
        @slot('title', $page->title)
        @slot('description', $page->description)
        @slot('img', $page->imgpath . $page->img)
    @endcomponent
@stop
