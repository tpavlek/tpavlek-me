---
imgpath: "/img/addie/"
img: "banner.jpg"
title: "A Sad Message from President Addie"
description: "In 2021, Addie, the elected  co-president of the Mill Creek Off Leash Area was diagnosed with neuroendocrine carcinoma. He might not make it to 2022. Now he wants more kittens to have a life as good as his."
---

@extends('_layouts.unwrapped')
@section('title', $page->title)

@section('content')
    <div class="h-96 w-full bg-cover bg-top relative" style="background-image: url('/img/addie/banner.jpg')">
        <div class="summary-description">
            <div class="text-white text-center absolute bottom-0 left-0 right-0 pb-8 z-10">
                <h1 class="text-5xl text-white">{{ $page->title }}</h1>
                <p class="max-w-5xl mx-auto text-lg leading-loose">
                    {{ $page->description }}
                </p>
            </div>
        </div>
    </div>

    <div class="bg-purple-900 text-white text-center p-2 lg:p-8">

        <video src="/img/addie/addie-small.mp4" controls class="mb-8 mx-auto" width="640" height="360"></video>

        <h1 class="text-4xl text-white my-4">Cancer sucks</h1>

        <div class="lg:flex items-center lg:space-x-4">
            <div class="text-xl leading-loose max-w-5xl lg:text-left py-4 mx-auto lg:w-1/2">
                <p>
                    I adopted Addie from the Edmonton Humane Society in 2013 when he was about 3 years old. Even before
                    he arrived home for the first time I knew he was a cat unlike any other. When you talk to Addie he talks back (even when you
                    don't talk to him he's never quiet). He doesn't like boxes. He doesn't jump on tables and counters. He's not stubborn,
                    but he finds creative ways to get what he wants anyway. It's hard to think of him as a kitten. When I look at him I only see
                    an intelligent and clever member of the family.
                </p>
                <p>
                    Addie has been with me through every moment of my adult life. When I wake up in the morning, Addie is here.
                    When I want to celebrate Addie is here.
                    When I'm dealing with extreme grief, trauma or catastrophe, Addie is always unfailingly and reliably here.
                </p>
                <p>
                    But soon, Addie won't be here anymore. I'm going to lose a member of my family.
                </p>
            </div>

            <div class="lg:w-1/2">
                <img src="{{ $page->imgpath }}/addie-headshot.jpg" class="shadow-md"/>
            </div>
        </div>


    </div>

    <div class="text-white text-center p-2 lg:p-8 bg-blue-900">
        <h1 class="text-3xl my-4 text-white">Forever my President</h1>

        <div class="xl:flex">

            <div class="rounded text-center xl:w-1/3">
                <img src="{{ $page->imgpath }}/vote-addie.png" class="shadow-md mx-auto"/>
            </div>

            <div class="xl:w-2/3 text-white mx-2 lg:mx-8 max-w-5xl text-lg px-2 lg:px-4 leading-loose text-left" markdown="1">
                <p>
                    In 2020, during the <a class="font-bold underline" href="https://edmonton.ctvnews.ca/edmonton-s-gone-paws-itively-nuts-off-leash-park-holds-pet-election-1.4938274">Mill Creek Off Leash Election</a>,
                    Addie was able to bring many in Edmonton the joy
                    he's brought to me every day since I adopted him. In a time when we were all uncertain about our futures,
                    he brought a much needed laugh and opportunity relax and lean in, hard, to something exceptionally silly.
                </p>

                <div class="text-center">
                    <iframe class="mx-auto" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcbcedmonton%2Fvideos%2F2884870158233196%2F&show_text=false&width=560" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>

                <p>
                    He was the cat we all needed, at just the right time.
                </p>


            </div>
        </div>
    </div>

    <div class="bg-white text-center p-2 lg:p-8">

        <h1 class="text-3xl">Donate</h1>

        <div class="max-w-5xl leading-loose text-lg text-center mx-auto">
            <p class="max-w-5xl">
                Addie was adopted from the Edmonton Humane Society. His sister was adopted from SCARS.
            </p>
            <p>
                Before Addie was adopted
                he lost some of his ear to frostbite, his fur was matted and unkempt and he was bullied by other cats leaving
                him scared and alone. His previous owners had him declawed leaving him not only feeling incomplete and in pain,
                but unable to defend himself effectively.
            </p>
            <p class="max-w-5xl">
                He's now the elected President of the Mill Creek Off Leash Area. Kittens can do anything when they find their forever
                home, and Addie wants to see as many kittens succeed as possible. He's asking everyone to donate (only what they can)
                to SCARS, The Humane Society, or any other registered cat shelter or rescue. After donating please email <strong><a href="mailto:addie@tpavlek.me">addie@tpavlek.me</a></strong>
                with the total so we can share how far we've gotten to his goal of helping every cat in need.
            </p>
        </div>

        <div class="inline-block mx-auto lg:p-4 p-2 bg-grey-200 shadow my-4">
            <h1 class="text-3xl">Donate to</h1>
            <div class="flex divide-x-2 divide-black justify-center">

                <a href="https://www.edmontonhumanesociety.com/how-to-help/donate/donate-now/" class="lg:px-4 px-2">
                    <button class="button p-4 text-sm mb-4">Edmonton Humane</button>
                    <div>
                        <img src="https://www.edmontonhumanesociety.com/wp-content/uploads/2019/03/EHS-Horizontal-4C-240x84.png" />
                    </div>

                </a>

                <a href="https://www.scarscare.ca/donate/" class="lg:px-4 px-2">
                    <button class="button p-4 text-sm mb-4">SCARS</button>
                    <div>
                        <img src="https://www.scarscare.ca/wp-content/uploads/2016/12/scars-logo.png" />
                    </div>

                </a>


            </div>

            <p class="text-xl">then email <strong>addie@tpavlek.me</strong> with your total!</p>
        </div>

        <h1 class="text-3xl mt-4 mb-0">Total Raised</h1>
        <h1 class="text-6xl text-green-500 mt-0 mb-0">$850</h1>
        <small class="italic mb-4">from 6 donors</small>

        <hr class="my-4 bg-grey-200">

        <h1 class="text-3xl my-4">Photos</h1>

        <a class="button" href="https://photos.app.goo.gl/CWn27Kus9xPZPAdv8">View Addie's full album</a>
        <div class="flex flex-wrap space-x-2 justify-center">
            <img src="/img/addie/adventure-cat.jpeg" class="object-contain w-72"/>
            <img src="/img/addie/portrait.jpg" class="object-contain w-72"/>
            <img src="/img/addie/scoot.gif" class="object-contain w-72"/>
            <img src="/img/addie/decision.jpg" class="object-contain" style="width:35rem;"/>
            <img src="/img/addie/selfie.jpg" class="object-contain w-72"/>
            <img src="/img/addie/stairs.jpg" class="object-contain w-96"/>
            <img src="/img/addie/closeup.jpg" class="object-contain" style="width:30rem;"/>
            <img src="/img/addie/drink.jpg" class="object-contain w-72"/>
            <img src="/img/addie/eyes.jpg" class="object-contain" style="width:30rem;"/>
            <img src="/img/addie/painting.jpg" class="object-contain" style="width:35rem;"/>
        </div>
    </div>
@stop
