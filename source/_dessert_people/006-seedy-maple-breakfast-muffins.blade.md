---
title: "Seedy Maple Breakfast Muffins"
slug: "seedy-maple-breakfast-muffins"
imgpath: "/img/dessert-people/seedy-maple-breakfast-muffins/"
img: "top-shot.jpg"
date: "2021-01-31"
description: "I don't know how a breakfast muffin qualifies as dessert, but I'll suspend my disbelief"
verdicts:
    "Seedy Maple Breakfast Muffins":
        troy:
            stars: "3.50"
            verdict: "They taste a bit too strongly of coconut for me and feel a bit too oily"
        rhi:
            stars: "4.0"
            verdict: "These look healthy but still taste good"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

It really is a stretch to call a breakfast muffin a "dessert", but I'll suspend my disbelief for now.

These turned out much better than we expected. I think if I was to change anything I might go lighter on
the coconut oil and replace half of it with a more neutral oil and add more blueberries. The blueberries
in this are little balls of happiness.

@component('_partials.dessert-people.photo-left-side', [ 'photo' => $page->imgpath . 'mess.jpg', 'photo_classes' => 'w-full lg:w-1/2' ])

There is nothing exceedingly complicated about this recipe. It is very low difficulty. But, just like a gas,
the struggle required to complete a task will expand to fill the available container.

This recipe does that in the form of dishes.

@component("_partials.dessert-people.pro-tip", [ 'author' => "troy", "variation" => 6])
Clean as you go is for suckers.
@endcomponent
@endcomponent

<div class="mt-8"></div>

@component('_partials.dessert-people.justify-around-gallery')
@include('_partials.muted-video', [ 'video' => $page->imgpath . 'pour.mp4', 'video_classes' => 'w-1/3' ])
<img src="{{$page->imgpath}}gross.jpg" class="w-1/3" />
@endcomponent

We tried to get some action shots, but the making of all just ended up looking pretty gross.

@component('_partials.dessert-people.photo-left-side', [ 'photo' => $page->imgpath . 'scoop.jpg', 'photo_classes' => 'w-full lg:w-1/2' ])

The recipe calls for a "scant 1/2 cup" scooped into each muffin cup. I used about a third cup and that felt
like more than enough... I don't know how you get a half cup in there, and there definitely wasn't enough batter.

I'm scant on trust in that instruction.
@endcomponent

<img src="{{$page->imgpath}}finished.jpg" class="w-full mt-8" />
  
<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 7, 'total' => 89 ])
</div>



