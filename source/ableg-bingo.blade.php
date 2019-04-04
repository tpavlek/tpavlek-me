---
imgpath: "/img/"
img: "bingo.png"
title: "#AbLeg Bingo!"
description: "Enhance your Alberta Election candidates debate by yelling \"BINGO\" at your screen!"
---

@extends('_layouts.wrapped')
@section('title', '#AbLeg Bingo!')

@section('content')

    <div id="bingo">
        <h1 class="text-center text-white mb-4">#AbLeg Bingo</h1>
        <div class="max-w-lg mx-auto" style="min-width:60rem;">
            <ableg-bingo></ableg-bingo>
        </div>
    </div>

    <div class="text-center max-w-lg mx-auto">
        <p class="text-white text-sm my-2">
            Looking for a weekly podcast all about Edmonton City Council? Check out Speaking Municipally!
        </p>

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/speaking-municipally',
            'img' => '/img/projects/speaking-municipally.jpg',
            'title' => 'Speaking Municipally Podcast',
            'sub_title' => '',
            'wrapper_class' => 'w-full h-48 shadow-md mx-4'
        ]])

        <div class="post-content text-white mt-2 text-sm text-center mx-auto">Made with ❤ by <a href="https://twitter.com/troypavlek">Troy Pavlek</a> (Tweet me new spaces to add!)</div>
    </div>
@stop

@section('scripts')
    <script>
        let vue = new window.Vue({
            'el': '#bingo',
        })
    </script>
@stop

