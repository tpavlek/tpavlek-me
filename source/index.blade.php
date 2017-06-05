---
exclude_home_nav: true
---
@extends('_layouts.unwrapped')
@section('title', "Let's talk")

<div class="splash-container">
    <div class="splash profile">
        <picture>
            <source media="(min-width: 1500px)" srcset="/img/campaign-logo/troy-profile-lg.png">
            <source media="(min-width: 1000px)" srcset="/img/campaign-logo/troy-profile-md.png">
            <img src="/img/campaign-logo/troy-profile-sm.png">
        </picture>
    </div>

    <div class="splash logo">
        <div>
            <img src="/img/campaign-logo/full-logo-inverted.png"/>
        </div>


        <div class="splash policy-links">
            <a href="/open-city" class="policy-link">Open City</a>
            <a href="/vision-zero" class="policy-link">Vision Zero</a>
            <a href="/efficient-effective-solutions" class="policy-link">Efficient, Effective Solutions</a>
            <a href="/photo-radar-reform" class="policy-link">Photo Radar Reform</a>
        </div>

    </div>


</div>

<div class="blog-sidebar">
    <a href="/blog" class="blog-header">
        <h1>
            BLOG
        </h1>
    </a>


    @foreach ($posts->slice(0,3) as $post)
        <a href="{{$post->getUrl()}}" class="summary-block" style="background-image:url('{{$post->imgpath}}{{$post->img}}')">
            <div class="summary-description">
                <div class="text">
                    <h2>{{ $post->title }}</h2>
                    <h4 class="date">
                        <small>{{ $post->date }}</small>
                    </h4>
                </div>
            </div>
        </a>
    @endforeach
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


