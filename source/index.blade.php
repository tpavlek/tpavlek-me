---
exclude_home_nav: true
---
@extends('_layouts.unwrapped')
@section('title', "Let's talk")

@section('content')

    <div class="row">
        <div class="col s12 l8 offset-l2 center">
            <div class="card hero-card">
                <div class="card-image troy-primary-color">
                    <img src="/img/splash-banner.png" />
                </div>
                <div class="card-content">
                    <div class="policy-links left-align">
                        <a href="/open-city" class="policy-link">Open City</a>
                        <a href="/vision-zero" class="policy-link">Vision Zero</a>
                        <a href="/photo-radar-reform" class="policy-link">Photo Radar Reform</a>
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
                        <span class="date">{{ $post->date }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<div class="policy-block">
    <h1 style="text-align:center">Hi! I'm Troy. Let's talk. &nbsp; <a href="#lets-talk"><i
                    class="fa fa-chevron-circle-down"></i></a></h1>
    <a id="lets-talk"></a>
    <div class="post-content">
        <p>
            Most of my professional experience comes from my role as a software developer. In software, there exist some
            well-accepted principles for writing great software within a budget: <em>break down problems into their
                smallest
                solveable pieces</em> and <em>don't repeat yourself</em>
        </p>

        <p>
            I believe these same concepts can be applied directly to Edmonton City's Council, which is why I am running
            for a seat in Ward 11.
        </p>

        <p>
            Our city council can suffer from <em>inaction paralysis</em>. They delay making decisions because they want
            to
            solve the "bigger issues" as well with one fell swoop. I think differently - the way we improve our city is
            not
            by making one big single "solve the city" policy. Rather, we need to look at the small stuff. That road
            behind
            your house. That one bus route. That one intersection. When we use data to solve <em>individual</em>
            problems well
            then, eventually, we'll have made the entire city better through all those small solutions.
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


