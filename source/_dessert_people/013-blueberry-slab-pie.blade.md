---
title: "Blueberry Slab Pie"
slug: "blueberry-slab-pie"
imgpath: "/img/dessert-people/blueberry-slab-pie/"
img: "banner.jpg"
date: "2021-04-18"
description: "The easiest pie crust I've ever made by just making the pie in a rectangular pan"
verdicts:
    "Blueberry Slab Pie":
        troy:
            stars: "5.00"
            verdict: "The crust is tasty and crispy, the filling is not-too-sweet and perfectly spiced"
        rhi:
            stars: "3.00"
            verdict: "I don't know what to say, I don't like pies. It was fine, I guess?"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

This recipe is, _really fucking big_. It calls for a full half-sheet pan, I halved the recipe and did
it in a quarter sheet pan. I gave half to my neighbours and still had enough to enjoy and eat with other
people.

Don't make the full thing unless you're literally hosting a rager.

@component('_partials.dessert-people.photo-left-side', ['photo' => $page->imgpath . "mess.jpg", 'photo_classes' => 'w-1/2' ])

@component('_partials.dessert-people.pro-tip', [ 'author' => "troy", 'variation' => "8" ])
When it tells you to wait for it to cool in order to lift it out of the pan, _listen_.
@endcomponent

@endcomponent

@include('_partials.image', [ 'name' => 'top-down.jpg' ])

The neighbours were cutting down a couple of their trees and we asked them to take down one of our
dead ones while they were doing it.

They considered the pie plus a pint of [Kind Ice Cream](https://www.kindicecream.ca/) to be sufficient payment.

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 14, 'total' => 89 ])
</div>
