---
title: "Salted Halvah Blondies"
slug: "salted-halvah-blondies"
imgpath: "/img/dessert-people/salted-halvah-blondies/"
img: "banner.jpg"
date: "2021-02-01"
description: "Blondies aren't supposed to be competitive with brownies, and I think that's the biggest indictment of this book so far"
verdicts:
    "Salted Halvah Blondies":
        troy:
            stars: "4.5"
            verdict: "They were better than the brownies"
        rhi:
            stars: "4.00"
            verdict: "Maybe if the magic word was \"close sesame\" there would be less of them"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

Halvah really doesn't taste good. I had never heard of it before making this recipe, and I tried a piece and it tastes like
bitter chalk.

Blondies turned out good with halvah baked in though.

@component('_partials.dessert-people.justify-around-gallery')
@include('_partials.muted-video', [ 'video' => $page->imgpath . 'pour.mp4', 'video_classes' => 'w-1/3' ])
@include('_partials.muted-video', [ 'video' => $page->imgpath . 'sesame-sprinkle.mp4', 'video_classes' => 'w-1/3' ])
@endcomponent

@component('_partials.dessert-people.photo-left-side', [ 'photo' => $page->imgpath . 'aluminum-pan.jpg', 'photo_classes' => 'w-1/2'])
yo dawg, i heard you liked aluminum so i made a whole other aluminum pan inside your aluminum pan

Real talk though, don't skip this step because it makes the brownies so much easier to take out and cut without
breaking or smooshing them.
@endcomponent

If you're thinking "jeez, this is a lot of sesame seeds", trust your instincts. I think the recipe called
for a bit TOO many sesame seeds and the result is just a _lot_ of sesame flavour, which comes off as
a bit bitter and overwhelming.

<div class="mt-8"></div>

@include('_partials.image', [ 'name' => 'blondie-plate.jpg', 'photo_classes' => "w-2/3"])

@include('_partials.image', [ 'name' => 'share_kalvin.jpg', "photo_classes" => 'w-1/3' ])
  
<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 8, 'total' => 89 ])
</div>



