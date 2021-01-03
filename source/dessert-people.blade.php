---
imgpath: "/img/dessert-people/"
img: "dessert-people.jpg"
title: Dessert People
description: "A project to bake every recipe in Claire Saffitz's \"Dessert Person\""
pagination:
    collection: dessert_people
    perPage: 10
---

@extends('_layouts.dessert-people')

@section('title', $page->title)

@section('content')
    <div class="h-96 w-full bg-cover bg-center relative" style="background-image: url('/img/dessert-people/dessert-people.jpg')">
        <div class="summary-description">
            <h1 class="text-white text-5xl text-center absolute bottom-0 left-0 right-0 pb-16 z-10">Dessert People</h1>
        </div>
    </div>

    <div class="bg-yellow-800 text-white  p-8">
        <div class="mx-auto max-w-5xl text-center">
            <h1 class="text-4xl text-white my-4">Two people, one year, one book written by Claire Saffitz</h1>

            <p class="text-xl leading-loose">
                Dessert People started at the end of December 2020 with a simple idea: what if we baked our way through
                through Claire Saffitz's <em>Dessert Person</em> and shared the results with the people around us?
            </p>

            <p class="text-xl leading-loose">
                This is that idea. Follow along as we attempt to convert as many people as possible into <strong>Dessert People</strong>
            </p>

            @include('_partials.dessert-people.progress-bar', [ 'progress' => $dessert_people->count(), 'total' => 89 ])
        </div>
    </div>

    <div class="text-white text-center p-8 bg-red-900">
        <h1 class="text-3xl my-4 text-white">Who we are</h1>

        <div class="lg:flex">

            <div class="flex bg-white rounded m-8 shadow-md lg:w-1/2">
                <div class="w-1/3 flex-none bg-cover bg-center overflow-hidden relative" style="background-image:url('/img/troy-profile.jpg');">
                    <div class="w-12 absolute bg-white right-0" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">

                    </div>
                </div>
                <div class="p-4 text-left text-grey-900">
                    <h1 class="text-2xl m-0">Troy Pavlek</h1>
                    <small class="italic">Head chef, likes to buy kitchen stuff</small>
                    <p class="mt-2 leading-loose">
                        Troy has a laundry list of culinary achievements including "watched a lot of BA Test Kitchen videos"
                        and "pretentiously thinks Kraft Dinner is gross". Under his studious tutelage, the Dessert People
                        project will judiciously replace meals with treats.
                    </p>
                </div>
            </div>

            <div class="flex bg-white rounded m-8 shadow-md lg:w-1/2">
                <div class="w-1/3 flex-none bg-cover bg-center overflow-hidden relative" style="background-image:url('/img/rhianna-profile.jpg');">
                    <div class="w-12 absolute bg-white right-0" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">
                    </div>
                </div>
                <div class="p-4 text-left text-grey-900">
                    <h1 class="text-2xl m-0">Rhianna Toop</h1>
                    <small class="italic">Sous chef, conscripted into doing dishes</small>
                    <p class="mt-2 leading-loose">
                        Rhianna's family likes to make jokes that she "has never cooked in her life" and she strives every
                        day to prove them wrong. She believes it's pretty clearly outlined in common law that a "dessert"
                        must be made of chocolate so she's treating this whole book with a wide berth of skepticism.
                    </p>
                </div>
            </div>
        </div>

        <h1 class="text-3xl my-4 text-white">What's cooking?</h1>

        @foreach ($pagination->items as $post)
            <a class="block max-w-2xl" href="{{ $post->getUrl() }}">
                @include('_partials.dessert-people.summary-card', [ 'post' => $post ])
            </a>

        @endforeach

    </div>



    <div class="bg-white text-center p-8">
        <h1 class="text-3xl my-4 text-black">Connect</h1>
        <a class="button" href="https://twitter.com/troypavlek">
            <i class="fab fa-twitter"></i> Follow @troypavlek
        </a>
        <a class="button" href="mailto:troy@tpavlek.me">
            <i class="fas fa-envelope"></i> Send an Email
        </a>
    </div>
@stop

@section("social_meta")
    @component('_partials.social_meta', [ 'page' => $page ])
        @slot('title', $page->title)
        @slot('description', $page->description)
        @slot('img', $page->imgpath . $page->img)
    @endcomponent
@stop

