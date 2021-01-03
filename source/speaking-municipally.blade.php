---
imgpath: "/img/projects/"
img: "speaking-municipally.jpg"
title: "Speaking Municipally - The podcast about Edmonton politics"
description: "Every week Troy and Mack run down everything you need to know about Edmonton City Council and why it matters in 30 minutes or less (or it's free!)"
---

@extends('_layouts.unwrapped')
@section('title', "Speaking Municipally Podcast")

@section('content')
    <div class="h-96 w-full bg-cover bg-center relative" style="background-image: url('/img/projects/speaking-municipally.jpg')">
        <div class="summary-description">
            <h1 class="text-white text-5xl text-center absolute bottom-0 left-0 right-0 pb-16 z-10">Speaking Municipally Podcast</h1>
        </div>
    </div>

    <div class="bg-purple-900 text-white text-center p-8">
        <h1 class="text-4xl text-white my-4">Curious about Edmonton municipal politics?</h1>

        <div class="lg:flex">
            <p class="text-xl leading-loose max-w-5xl lg:text-left py-4 mr-4 lg:w-1/2">
                Each week, Speaking Municipally breaks down the events of the past week, gives you an informed take on them
                dives into the context of how these decisions got made and why they matter to you.
                <br />
                All in under thirty minutes, without (we hope) being boring for any of those minutes.
            </p>

            <div class="lg:w-1/2 ml-4 flex flex-col items-center justify-center">
                <iframe src='https://share.transistor.fm/e/speaking-municipally/latest' width='100%' height='180' frameborder='0' scrolling='no' seamless='true'></iframe>
            </div>
        </div>


    </div>

    <div class="text-white text-center p-8">
        <h1 class="text-3xl my-4 text-white">Who we are</h1>

        <div class="lg:flex">

            <div class="flex bg-white rounded m-8 shadow-md">
                <div class="w-1/3 flex-none bg-cover bg-center overflow-hidden relative" style="background-image:url('/img/troy-profile.jpg');">
                    <div class="w-12 absolute bg-white right-0" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">

                    </div>
                </div>
                <div class="p-4 text-left text-grey-900">
                    <h1 class="text-2xl m-0">Troy Pavlek</h1>
                    <small class="italic">Co-host, editor, issuer of hot takes</small>
                    <p class="mt-2 leading-loose">
                        Troy's take on local politics comes from the unique cross-section of his interests in bikes, policy,
                        internet culture and a rabid and undying love of The West Wing. He <a href="/blog/2017/10/17/i-lost-the-election">tried to run for city council in 2017</a>
                        and failed very, very badly. Now he has a podcast, so take that haters, I guess.
                    </p>
                </div>
            </div>

            <div class="flex bg-white rounded m-8 shadow-md">
                <div class="w-1/3 flex-none bg-cover bg-center overflow-hidden relative" style="background-image:url('/img/mack-profile.jpg');">
                    <div class="w-12 absolute bg-white right-0" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">

                    </div>
                </div>
                <div class="p-4 text-left text-grey-900">
                    <h1 class="text-2xl m-0">Mack Male</h1>
                    <small class="italic">Co-host, Business Daddy™, does all the actual work</small>
                    <p class="mt-2 leading-loose">
                        Mack is the co-founder of Taproot Publishing, the organization that backs Speaking Municipally each week.
                        He's compiled "Edmonton Notes" on his blog for longer than humans have been keeping historical records which
                        gives the podcast a unique flavour of having both hot takes and <span class="italic">facts</span>.
                    </p>
                </div>
            </div>
        </div>

        <h1 class="text-3xl my-4 text-white">Where to start?</h1>
        <p>
            You can always pick up from the most recent (or first!) episode, but here are some other starting points.
        </p>

        <div class="flex flex-wrap justify-center row-wrap space-x-6 space-y-6">
            <div class="shadow-md bg-white rounded-lg text-center text-grey-900 max-w-2xl mt-6 ml-6">
                <div class="mx-auto">
                    <p class="leading-loose text-left p-4">
                        Council wants to spend hundreds of millions of dollars upgrading Terwillegar Drive to a freeway or an expressway.
                        But is it worth it? How did we get here? Troy and Mack do a deep dive on the history of Terwillegar Drive.
                    </p>
                    <iframe class="mx-auto" width="100%" height="180" frameborder="no" scrolling="no" seamless src="https://share.transistor.fm/e/333aaa00"></iframe>
                </div>
            </div>

            <div class="shadow-md bg-white rounded-lg text-center text-grey-900 max-w-2xl">
                <div class="mx-auto">
                    <p class="leading-loose text-left p-4">
                        "Complaining is a summer sport in Edmonton" according to Don Iveson. Or is the new library just bad? We break down
                        what happened, and whose fault it is (spoiler alert: cheap people are at fault)
                    </p>
                    <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless src="https://share.transistor.fm/e/ba670ab5"></iframe>
                </div>
            </div>

            <div class="shadow-md bg-white rounded-lg text-center text-grey-900 max-w-2xl">
                <div class="mx-auto">
                    <p class="leading-loose text-left p-4">
                        What does a UCP win in the province, with only a single UCP MLA elected in Edmonton mean for the city?
                        Thankfully, history is instructive and this is not the first time something like this has happened. Mack
                        and Troy take a look at history and make some predictions.
                    </p>
                    <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless src="https://share.transistor.fm/e/c5c03c64"></iframe>
                </div>
            </div>

            <div class="shadow-md bg-white rounded-lg text-center text-grey-900 max-w-2xl">
                <div class="mx-auto">
                    <p class="leading-loose text-left p-4">
                        Prarie Sky Gondola wants to build a sky-tram through the river valley. Troy and Mack have historically
                        been very down on the idea. Jeffrey Hansen-Carlson from Prarie Sky comes on to try and convince them, and you!
                    </p>
                    <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless src="https://share.transistor.fm/e/74c2018e"></iframe>
                </div>
            </div>

            <div class="shadow-md bg-cover bg-right-bottom rounded-lg text-center text-grey-900 max-w-2xl" style="background-image: url('/img/projects/jeopardy.png')">
                <div class="mx-auto h-full w-full gradient-cover">
                    <p class="relative z-50 leading-loose text-left p-4 text-yellow-300">
                        In the first episode of what will become a holiday tradition: Troy hosts a game of Edmonton Jeopardy
                        featuring Elise Stolte, Chris Chang-Yen Phillips and Mack Male.
                    </p>
                    <iframe class="relative z-50" width="100%" height="180" frameborder="no" scrolling="no" seamless src="https://share.transistor.fm/e/12d8709b"></iframe>
                </div>
            </div>

            <div class="shadow-md bg-cover bg-right-bottom rounded-lg text-center text-grey-900 max-w-2xl" style="background-image: url('/img/projects/jeopardy.png')">
                <div class="mx-auto h-full w-full gradient-cover">
                    <p class="relative z-50 leading-loose text-left p-4 text-yellow-300">
                        The second holiday episode of Edmonton Jeopardy, featuring three councillors: Aaron Paquette, Andrew Knack and Sarah Hamilton
                    </p>
                    <iframe class="relative z-50" width="100%" height="180" frameborder="no" scrolling="no" seamless src="https://share.transistor.fm/e/8dad084b"></iframe>
                </div>
            </div>

        </div>
    </div>



    <div class="bg-white text-center p-8">
        <a class="button" href="http://speakingmunicipally.taprootedmonton.ca/subscribe">
            Subscribe
        </a>
    </div>
@stop
