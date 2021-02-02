---
draft: true
title: "Salted Halvah Blondies"
slug: "salted-halvah-blondies"
imgpath: "/img/dessert-people/salted-halvah-blondies/"
img: "banner.jpg"
date: "2021-02-01"
description: ""
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
  
<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 8, 'total' => 89 ])
</div>



