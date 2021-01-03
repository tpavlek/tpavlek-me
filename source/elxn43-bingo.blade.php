---
imgpath: "/img/"
img: "elxn-bingo.png"
title: "#elxn43 Bingo!"
description: "Enhance your Canadian Federal Election debate by yelling \"BINGO\" at your screen!"
---

@extends('_layouts.wrapped')
@section('title', '#elxn43 Bingo!')

@section('content')

    <div id="bingo">
        <h1 class="text-center text-white mb-4">#exln43 Bingo</h1>
        <div class="max-w-4xl mx-auto" style="min-width:60rem;">
            <elxn-bingo></elxn-bingo>
        </div>
    </div>

    <div class="text-center max-w-4xl mx-auto">
        <p class="text-white text-sm my-2">
            Looking for a weekly podcast all about Edmonton City Council? Check out Speaking Municipally!
        </p>

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/speaking-municipally',
            'img' => '/img/projects/speaking-municipally.jpg',
            'title' => 'Speaking Municipally Podcast',
            'sub_title' => '',
            'wrapper_class' => 'w-full shadow-md mx-4'
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

