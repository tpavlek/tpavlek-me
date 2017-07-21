---
imgpath: "/img/mad-signs/"
img: "sign-proliferation.jpg"
title: Municipal Election Sign Disarmament Treaty
description: "Commit to not putting up any electoral signs on public or private property until after Labour Day. Sign the MESDT"
---

@extends('_layouts.wrapped')

@section('title', $page->title)

@section('content')

    <article class="is-centered post">
        <header class="summary-block" style="background-image: url('{{ $page->imgpath }}{{ $page->img }}');">

            <div class="summary-description">
                <div class="text">
                    <span class="title">{{ $page->title }}</span>
                </div>
            </div>

        </header>
        <div class="post-content">
            <em style="font-size:80%">
                Check out the Edmonton Journal's <a href="https://www.youtube.com/watch?v=DfGDVQ444Aw">video</a> detailing how election
                signs can grow
            </em>

            <p>
                Every election year, without fail, there is a cold-war-style mutually assured destruction with election signs.
            </p>

            <p>
                Except, invariably, it is the neighbourhoods voting that are destroyed. Signs proliferate and multiply,
                assaulting our eyes when we're driving or attempting to enjoy green spaces. Boulevard grass disappears beneath
                the corrugated plastic.
            </p>

            <p>
                And that's a shame.
            </p>

            <p>
                Election signs are an unfortunate reality of our democratic process. But we can stop the early proliferation
                of these signs. While signs are prohibited from public property until after Labour Day, signs can appear on
                private property as soon as the first candidate decides to.
            </p>

            <p>
                And once the first candidate does, all of their competitors hit that big red button, and the horrors of
                electoral war begin to claim neighbourhoods as victims.
            </p>

            <blockquote>
                <p>
                    There's a better way.
                </p>
            </blockquote>

            <p>
                Sign the <strong>Municipal Election Sign Disarmament Treaty</strong>, and commit to not putting up any electoral signs on
                public or private property until after Labour Day. Give voters some room to breathe. Keep our neighbourhoods
                clean, for as long as possible.
            </p>

            <div class="card">
                <div class="card-content blue white-text">
                    <span class="card-title">Municipal Election Sign Disarmament Treaty</span>
                </div>
                <div class="card-content blue lighten-5">
                    <div class="card-content">
                        <span class="card-title">
                            We, the undersigned,
                        </span>
                        commit to keeping our wards clean of election signs, posters and various
                        public-facing propaganda until after Labour Day. We call on our opposition to do the same, and
                        keep our neighbourhoods clean, beautiful and advertising-free until after Labour Day
                    </div>
                    <div class="card-content">
                        <div class="card-title">Signatories</div>
                        <ul>
                            <li>Troy Pavlek, Ward 11</li>
                        </ul>
                    </div>
                </div>
            </div>


            <p style="font-size:70%;">
                <em>
                    The <strong>MESDT</strong> aims to provide comfortable breathing room by collecting all candidates as signatories. If a
                    competitor fires his sign-based weaponry in your ward, you will be excused from your commitments under
                    <strong>MESDT</strong> and will be free to retaliate.
                </em>

            </p>

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
