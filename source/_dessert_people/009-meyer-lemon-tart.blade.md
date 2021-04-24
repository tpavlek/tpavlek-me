---
draft: false
title: "Meyer Lemon Tart"
slug: "meyer-lemon-tart"
imgpath: "/img/dessert-people/meyer-lemon-tart/"
img: "banner.jpg"
date: "2021-02-28"
description: "Likely through human error, it doesn't live up to the promise of lemon tarts"
verdicts:
    "Meyer Lemon Tart":
        troy:
            stars: "4.000"
            verdict: "It was a bit too tart, and structurally didn't hold up well"
        rhi:
            stars: "2"
            verdict: "The jam made it worse, but it didn't have a lot to start with"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

Lemon tarts are one of my favourite tarts. I like a bit of puckering sour in my desserts.

Unfortunately this one had a bit too much sour, and didn't hold together and set properly to give that
jiggly feeling you get when you're eating a properly prepared tart with a curd on it.

Whether that was because I couldn't find meyer lemons and had to use regular ones, or if I accidentally put in too much
lemon juice to compensate, or if I just cooked the curd improperly, who knows.

Crust tasted great though.

<hr class="mt-8" />

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "broken-tart.jpg", $page->imgpath . "broken-serve.jpg" ] ])
The curd wasn't the only thing that was broken.
@endcomponent

@include('_partials.image', [ 'name' => 'atlas-approved.jpg' ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 10, 'total' => 89 ])
</div>
