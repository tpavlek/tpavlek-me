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

        <div class="lg:flex">
            <p class="text-xl leading-loose max-w-xl lg:text-left py-4 mr-4 lg:w-1/2">
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
        <h1 class="text-3xl my-4 ">Who we are</h1>

        <div class="lg:flex">

            <div class="flex bg-white rounded m-8 shadow-md">
                <div class="w-1/3 flex-none bg-cover bg-center overflow-hidden relative" style="background-image:url('/img/troy-profile.jpg');">
                    <div class="w-12 absolute bg-white pin-r" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">

                    </div>
                </div>
                <div class="p-4 text-left text-grey-darkest">
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
                    <div class="w-12 absolute bg-white pin-r" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">

                    </div>
                </div>
                <div class="p-4 text-left text-grey-darkest">
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
    </div>

    <div class="bg-white text-center p-8">
        <a class="button" href="http://speakingmunicipally.taprootedmonton.ca/subscribe">
            Subscribe
        </a>
    </div>
@stop
