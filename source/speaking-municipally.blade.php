@extends('_layouts.unwrapped')
@section('title', "Speaking Municipally Podcast")

@section('content')
    <div class="h-64 w-full bg-cover bg-center relative" style="background-image: url('/img/projects/speaking-municipally.jpg')">
        <div class="summary-description">
            <h1 class="text-white text-5xl absolute pin-b pin-l pin-r pb-16 z-10">Speaking Municipally Podcast</h1>
        </div>
    </div>

    <div class="bg-purple-darkest text-white text-center p-8">
        <h1 class="text-4xl my-4">Curious about Edmonton municipal politics?</h1>

        <p class="text-xl leading-loose max-w-xl text-center py-4 mx-auto">
            <a href="https://twitter.com/mastermaq" class="text-white">Mack Male</a> and I have just the podcast for you!
            <br />
            Each week on Speaking Municipally, we'll break down the events of the past week, give you our take on them
            and give you the context of how these decisions got made and why they matter to you.
            <br />
            All in under thirty minutes, without (we hope) being boring for any of those minutes.
        </p>

        <h1 class="text-2xl my-4">Latest Episode</h1>

        <iframe src='https://share.transistor.fm/e/speaking-municipally/latest' width='100%' height='180' frameborder='0' scrolling='no' seamless='true'></iframe>

    </div>

    <div class="text-white text-center p-8">
        <h1 class="text-3xl my-4 ">Podcast Trailer</h1>
        @include('_partials.youtube', [ 'video_id' => "RAyFYWOlFOs"])
    </div>

    <div class="bg-white text-center p-8">
        <a class="button" href="http://speakingmunicipally.taprootedmonton.ca/subscribe">
            Subscribe
        </a>
    </div>
@stop
