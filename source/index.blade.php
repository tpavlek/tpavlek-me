---
exclude_home_nav: true
title: "Troy Pavlek -- Edmonton City Council Candidate for Ward 11"
description: "Troy Pavlek is running for a City Council seat in Ward 11. He brings a youthful, technology-aware, and data-focused approach to the problems facing the City of Edmonton."
---
@extends('_layouts.unwrapped')
@section('title', "Let's talk")

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

    <meta name="twitter:image" content="{{$page->baseUrl}}/img/splash-banner-bg.jpg"/>
    <meta property="og:image" content="{{ $page->baseUrl }}/img/splash-banner-bg.jpg"/>

    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
@stop

@section('content')

    @include('_partials.action-bar')

    <div class="row">
        <div class="col s12 l8 offset-l2 center">
            <div class="card hero-card">
                <div class="card-image troy-primary-color">
                    <img src="/img/splash-banner.png" />
                </div>
                <div class="card-content">
                    <div class="policy-links left-align">
                        <a href="/platform" class="policy-link">Platform</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="blog-bar">
    <a href="/blog" class="blog-header">
        <h1>
            Recent Updates
        </h1>
    </a>

    <div class="flex row-wrap">
        @foreach ($posts->slice(0,3) as $post)
            <a href="{{$post->getUrl()}}" class="summary-block" style="background-image:url('{{$post->imgpath}}{{$post->img}}')">
                <div class="summary-description">
                    <div class="text">
                        <span class="title">{{ $post->title }}</span>
                        <span class="date">{{ ( new \Carbon\Carbon($post->date))->format("F jS, Y") }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <a href="/blog" class="button">View All Posts</a>
</div>

<div class="policy-block">
    <h1 style="text-align:center">Hi! I'm Troy. Let's talk. &nbsp; <a href="#lets-talk"><i
                    class="fa fa-chevron-circle-down"></i></a></h1>
    <a id="lets-talk"></a>
    <div class="post-content">
        <p>
            I am running to be Edmonton's City Councillor for Ward 11. Professionally, I'm a software developer and I believe
            that my technological expertise can fill a niche that has been rarely, if ever, filled on our city council.
        </p>

        <p>
            I believe in true openness, that's why you'll find me broadcasting strong, detailed positions on issues.
            You'll find my <a href="/platform">Platform</a> on this website and I don't equivocate and try to play both
            sides on the issues that matter.
        </p>

        <p>
            When writing great software within a budget, there is a well accepted practice:
            <em>break down problems into their smallest solveable pieces</em> and <em>don't repeat yourself</em>.
        </p>

        <p>
            I believe these same concepts can be applied directly to Edmonton City's Council. The way we improve our city is
            not by making one big single "solve the city" policy. Rather, we need to look at the small stuff. That road behind
            your house. That one bus route. The slow intersection -- you know the one! When we use data to solve <em>individual</em>
            problems well, eventually, we'll have made the entire city better through all those small solutions.
        </p>

        <p>
            We need a new voice on City Council. I look forward to convincing you that I can be that voice.
        </p>

        <p>
            Any questions or feedback? I want to talk with <strong>you</strong>.
        </p>

        @include('_partials.contact')


    </div>

</div>

@stop


