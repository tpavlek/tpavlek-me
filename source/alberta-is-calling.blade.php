---
imgpath: "/img/"
img: "exemption-card-demo.png"
title: "Why is Alberta calling? You decide!"
description: "This is mature, sophisticated debate"
---

@extends('_layouts.wrapped')
@section('title', 'Generate your own bylaw exemption card')

@section('content')
    <div id="alberta-calling">

        <h1 class="text-center text-white mb-4">Tell everyone why Alberta is calling!</h1>
        <div class="max-w-4xl mx-auto" style="min-width:60rem;">
            <alberta-calling></alberta-calling>
        </div>
    </div>

    <div class="text-center max-w-4xl mx-auto mb-4">
        <div class="post-content text-white my-2 text-sm text-center mx-auto">
            Made with ❤ by <a class="content-link" href="https://twitter.com/troypavlek">Troy Pavlek</a>

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


    </div>
@stop

@section('scripts')
    <script>
        new Vue({}).$mount('#alberta-calling');
    </script>
@stop

