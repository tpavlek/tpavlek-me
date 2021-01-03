---
exclude_home_nav: true
title: "Troy Pavlek: I lose elections"
description: ""
---
@extends('_layouts.wrapped')

@section("social_meta")
    @component('_partials.social_meta', [ 'page' => $page ])
        @slot('title', $page->title)
        @slot('description', ($page->description) ? $page->description : "Troy Pavlek - podcaster, software developer, really, really bad election candidate")
        @slot('img', $page->imgpath . $page->img)
    @endcomponent
@stop

@section('content')

    <div class="w-full flex flex-wrap justify-center">

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/bylaw-exemption',
            'img' => '/img/exemption-card-demo.png',
            'title' => 'Bylaw Exemption Generator',
            'sub_title' => 'Bylaws? More like schmy-laws!',
            'wrapper_class' => 'w-full lg:w-2/5 shadow-md mx-4'
        ]])

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/speaking-municipally',
            'img' => '/img/projects/speaking-municipally.jpg',
            'title' => 'Speaking Municipally Podcast',
            'sub_title' => '',
            'wrapper_class' => 'w-full lg:w-2/5 shadow-md mx-4'
        ]])

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/edmonton-photo-radar',
            'img' => '/img/posts/2017-08-15-open-photo-radar-locations-audit/spider-photo.jpg',
            'title' => 'Edmonton Photo Radar: The Stats',
            'sub_title' => '',
            'wrapper_class' => 'w-full lg:w-2/5 shadow-md mx-4'
        ]])

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/jeopardy',
            'img' => '/img/posts/2017-12-05-starcraft-jeopardy-is-returning/banner.jpg',
            'title' => 'Starcraft Jeopardy',
            'sub_title' => '',
            'wrapper_class' => 'w-full lg:w-2/5 shadow-md mx-4'
        ]])

        @include('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/edmonton-memes',
            'img' => '/img/posts/2017-10-14-adding-some-levity/sweetie-star.jpg',
            'title' => 'Edmonton Memes',
            'sub_title' => 'I make political memes on YouTube sometimes',
            'wrapper_class' => 'w-full lg:w-2/5 shadow-md mx-4'
        ]])
    </div>

    @include('_partials.blog-page', [ 'posts' => $posts->slice(0,4), 'pagination' => null ])

    <div class="text-center p-2">
        <a href="/blog" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-700">
            <i class="fa fa-archive"></i> Blog Archive
        </a>
    </div>

@stop


