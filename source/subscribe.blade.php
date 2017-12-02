---
title: "Troy Pavlek -- Edmonton City Council Candidate for Ward 11"
description: "Troy Pavlek is running for a City Council seat in Ward 11. He brings a youthful, technology-aware, and data-focused approach to the problems facing the City of Edmonton."
---

@extends('_layouts.wrapped')
@section('title', 'Subscribe to Campaign Updates')

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

    <h1 class="main-heading">Subscribe to Updates!</h1>

    <article class="mx-auto bg-white shadow">
        <div class="post-content post-text">
            <p>
                Subscribe to the mailing list and you'll get updates about things that I'm doing.
            </p>
            <p>
                Following on Twitter or Facebook is probably a better strategy, though.
            </p>
            <p class="text-center">
                <a href="http://eepurl.com/ccFea9" class="button button-lg"><i class="fa fa-envelope"></i> Subscribe to
                    the Mailing List</a>
            </p>
        </div>
    </article>

    <div class="text-center">
        @include('_partials.contact')
    </div>

@stop
