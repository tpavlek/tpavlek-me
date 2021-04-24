---
draft: true
title: "Chocolate Hazelnut Galette des Rois"
slug: "galette-des-rois"
imgpath: "/img/dessert-people/galette-des-rois/"
img: "banner.jpg"
date: "2021-03-07"
description: "This is one recipe where the note about being best enjoyed on the first day cannot be ignored"
verdicts:
    "Galette des Rois":
        troy:
            stars: "3.5"
            verdict: "It was really great immediately out of the oven, and trash the next day"
        rhi:
            stars: "2"
            verdict: "It was meh"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

A chocolate hazelnut puff pastry doesn't leave much to complain about, and out of the oven there
wasn't much to complain about. If you're enjoying this with a group of people immediately after baking,
it's a five-star recipe.

If you expect to enjoy this the next day - or even 6 hours later - you'll be less enthused.

Moisture sapped out of the filling making the crust very soggy and texturally gross.

It was sad.

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "top-down.jpg", $page->imgpath . "slice.jpg" ] ])
In terms of gorgeous-looking pastry, the fresh-out of the oven galette sure looks the part.

Looks aren't everything though.
@endcomponent

Ironically, the bonus tart we made with extra filling and pastry pieces actually ended up holding up _better_ in subsequent days,
probably because the moisture from the filling could get wicked into the air, rather than trapped
between layers of pastry.

@include('_partials.image', [ 'name' => 'bonus-tart.jpg' ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 11, 'total' => 89 ])
</div>
