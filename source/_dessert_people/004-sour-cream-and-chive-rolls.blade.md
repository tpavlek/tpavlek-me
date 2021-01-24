---
title: "Sour Cream and Chive Rolls"
slug: "sour-cream-and-chive-rolls"
imgpath: "/img/dessert-people/sour-cream-and-chive-rolls/"
img: "banner.jpg"
date: "2021-01-23"
description: "It's like sour cream and onion chips except instead of potatoes it's flour and instead of being bad, it's good"
troy_stars: "5"
troy_verdict: "I promise I still have a sweet tooth. But these knocked it out of the park."
rhi_stars: "4"
rhi_verdict: "Put some cheese in this recipe, give the people what they want"
---

<h3 class="text-center font-black text-2xl text-red-900">The Verdict</h3>

@component('_partials.dessert-people.verdict')

@slot('troy_stars', $page->troy_stars)
@slot('troy_verdict', $page->troy_verdict)
@slot('rhi_stars', $page->rhi_stars)
@slot('rhi_verdict', $page->rhi_verdict)

@endcomponent

A point of contention with this book is that savoury breads are included in a "Dessert" book.

This recipe is the perfect rebuttal for that complaint. If you eat an entire plate of brownies, you'll
feel shame. If you eat four sour cream and chive rolls, well that's just how it goes. Bread is how humans
survive. It's the circle of life.

Plus they're tasty.

@component('_partials.dessert-people.photo-left-side', [ 'photo' => $page->imgpath . 'flour_scale.gif' ])

@component('_partials.dessert-people.pro-tip', [ 'author' => "troy", 'variation' => "4" ])
Digital scales are both more precise for measuring flour, but also allow you to up your pretentiousness rating by 300%
@endcomponent

@endcomponent

<div class="my-4"></div>

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "dough-rise.jpg", $page->imgpath . "queens-gambit.jpg"]])
While you're waiting for the dough to rise, The Queen's Gambit is an appropriate choice to pass the time.
@endcomponent

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "roll.gif" ])
One of the better investments I've made during this process was a silicone baking mat with measurements printed on it.

Not only does it reduce parchment paper waste, but any time you need to roll something out, the measurements are right there,
no rule required. Plus, things like shaping rolls into balls can be done very easily with the increased friction on the mat.
@endcomponent

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "dishes.jpg", 'photo_classes' => 'w-full lg:w-1/2'])
@component('_partials.dessert-people.pro-tip', [ 'author' => "rhianna", 'variation' => "4" ])
Don't get tricked into doing the dishes. If he says "can you come here for just a moment", **RUN**.
@endcomponent
@endcomponent

The instructions in Dessert Person left a bit of something to be desired as to _how_ you were actually
supposed to roll the pieces of dough into balls. I found I ended up basically treating them like little balls of clay,
and using the friction of the baking mat to seal the sides. The first half turned out _okay_ until I got the hang of it.

We also subbed green onions for chives because the chives in my garden are under big piles of snow, and green onions were cheaper.

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "dough-rise-2.jpg", $page->imgpath . "chess.png"]])
While you're waiting for the dough to rise _again_ 🙄, pretend you're on The Queen's Gambit with a wee bit of chess.
@endcomponent

<div class="flex items-center justify-around flex-wrap mt-8">
<div class="w-1/3">
<img src="{{ $page->imgpath}}finished.jpg" />
</div>
<div class="w-1/3 shadow-md">
<img src="{{$page->imgpath}}enjoy.jpg" />
</div>
<div class="w-1/3">
<img src="{{$page->imgpath}}butter.jpg" />
</div>

</div>
  
<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 4, 'total' => 89 ])
</div>



