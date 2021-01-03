---
title: "Troy Pavlek -- Edmonton City Council Candidate for Ward 11"
description: "Troy Pavlek is running for a City Council seat in Ward 11. He brings a youthful, technology-aware, and data-focused approach to the problems facing the City of Edmonton."
---

@extends('_layouts.wrapped')
@section('title', 'Subscribe to Campaign Updates')

@section("social_meta")
    @component('_partials.social_meta', [ 'page' => $page ])
        @slot('title', $page->title)
        @slot('description', ($page->description) ? $page->description : "Troy Pavlek - podcaster, software developer, really, really bad election candidate")
        @slot('img', $page->imgpath . $page->img)
    @endcomponent
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
