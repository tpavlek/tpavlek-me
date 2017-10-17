---
exclude_home_nav: true
title: "Troy Pavlek: I lose elections"
description: ""
---
@extends('_layouts.wrapped')

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

    @include('_partials.blog-page', [ 'posts' => $posts->slice(0,4), 'pagination' => null ])

    <div class="center">
        <a href="/blog" class="button xlarge"><i class="fa fa-archive"></i> Blog Archive</a>
    </div>

@stop


