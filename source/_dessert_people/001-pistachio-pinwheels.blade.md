---
title: Pistachio Pinwheels
slug: "pistachio-pinwheels"
imgpath: "/img/dessert-people/pistachio-pinwheels/"
img: "sheet.jpg"
date: "2020-12-30"
description: "1/89: It's green swirls in a shortbread cookie, how hard can it be?"
troy_stars: "4"
troy_verdict: They're not too sweet, have an interesting nutty flavour and look pretty
rhi_stars: "3"
rhi_verdict: "They're basically grandma-cookies"
---

<h3 class="text-center font-black text-2xl text-red-900">The Verdict</h3>

@component('_partials.dessert-people.verdict')

@slot('troy_stars', $page->troy_stars)
@slot('troy_verdict', $page->troy_verdict)
@slot('rhi_stars', $page->rhi_stars)
@slot('rhi_verdict', $page->rhi_verdict)

@endcomponent

<hr class="mt-8 mx-auto w-1/2 border-b-1 border-grey-200"/>

As this marks the first recipe in the Dessert People project, I don't have anything really to compare it to.

While it seemed easy to make, I can't be sure whether that's because I'm exceptionally talented or if it's because
the professional cook who authored the book and rated the recipes rated this as not difficult.

<div class="bg-grey-100 shadow-md rounded text-base md:-mx-8">
    <div class="p-4">
        My 3.5-cup, got-it-for-free food processor that I've had forever could barely manage the chopping of the pistachios.
        I should have known not to try and do the dough in it, I very quickly had to give up and throw it in the stand mixer.
    </div>
    <div class="flex px-4 pb-4">
        <img class="w-1/2" src="{{ $page->imgpath }}failed_processor.jpg" /> 
        <img class="w-1/2" src="{{ $page->imgpath }}mixer.jpg" />
    </div>
</div>

@component('_partials.bigass-quote')
Plop!
@endcomponent

<div class="flex flex-col md:flex-row mt-8">
    <div class="flex-grow flex flex-col md:flex-row items-center px-4">
        <div markdown="1">
This dough gets _sticky_. Don't use a spatula that disconnects from the handle to mix and deal with it, because it 
will just get embedded in the dough, then pop off the handle then you'll be getting sticky dough all over your hands
and then what's even the point of tools?

Make sure you don't skimp on chilling the dough in the fridge. If it's softer or warmer then when you're smearing
pistachios on the base layer, the base will rip and tear and ruin your day.

@component('_partials.dessert-people.pro-tip', [ 'author' => "rhianna", 'variation' => "1" ])
    I just watched. It's a lot easier when someone is doing all the work.
@endcomponent
        </div>
    </div>
    <div class="text-center mt-4 md:mt-0">        
        <img class="mx-auto" src="{{ $page->imgpath}}smear.gif" />
    </div>
</div>

<div class="flex flex-col-reverse md:flex-row mt-8">
    <div class="mt-4 md:mt-0 text-center">
        <img src="{{ $page->imgpath}}cats.gif" class="mx-auto" />
    </div>
    <div class="flex-grow px-4 flex flex-col-reverse md:flex-row items-center">
        <div markdown="1">
        <div class="flex">
            <img class="w-1/2" src="{{$page->imgpath}}chop.jpg">
            <img class="w-1/2" src="{{$page->imgpath}}bake.jpg">
        </div>
No one tells you how difficult it is to chop this tube of cookie dough in a straight line. Slanted cookies
are part of life.

@component('_partials.dessert-people.pro-tip', [ 'author' => "troy", 'variation' => "1" ])
While you're waiting for things to bake, watching cats snuggle is a great way to pass the time.
@endcomponent
        </div>
    </div>        
</div>

<div class="bg-grey-100 shadow-md rounded text-base md:-mx-8 mt-8">
    <div class="p-4" markdown="1">
    
After serving, don't forget the most important steps:

* Take the drama shot for instagram
* Share with friends because being Dessert People is contagious 

    </div>
    <div class="flex px-4 pb-4">
        <img class="w-1/3" src="{{ $page->imgpath }}share_scott.png" />
        <img class="w-1/3" src="{{ $page->imgpath }}drama.jpg" /> 
        <img class="w-1/3" src="{{ $page->imgpath }}share_elita.jpg" />
    </div>
</div>

<div class="mt-8">

@include('_partials.dessert-people.progress-bar', [ 'progress' => 1, 'total' => 89 ])
</div>


