---
title: "Tarte Tropézienne / Brioche Twists with Coriander Sugar"
slug: "tarte-tropezienne-brioche-twists"
imgpath: "/img/dessert-people/tarte-tropezienne-brioche-twists/"
img: "banner.jpg"
date: "2021-01-27"
description: ""
verdicts:
    "Brioche Twists":
        troy:
            stars: "5.0"
            verdict: "It's like cinnamon twists but there's no cinnamon. What a life."
        rhi:
            stars: "4.5"
            verdict: This is my favourite recipe so far.
    "Tarte Tropézienne":
        troy:
            stars: "4.00"
            verdict: Both parts were good, but neither part felt like they loved each other. Will likely file for divorce.
        rhi:
            stars: "3.5"
            verdict: "They did not pack as big of a punch as I expected, but I would still eat them all"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

When there are two recipes each calling for half a recipe of brioche dough, you make them both at once
and that is called _efficiency_.

@component('_partials.dessert-people.photo-left-side', ['photo' => $page->imgpath . "sticky-dough.gif"])

Brioche dough really isn't that difficult to make, you're basically just throwing shit in a mixer. That mixer 
part is important.

Scripture (_Dessert Person_) tells us:

> when it comes to brioche things can get very sticky and a little messy

**Believe Claire**. Use a mixer.
@endcomponent
<img src="{{$page->imgpath}}mixer-temp.jpg"  class="w-full" />

Before you set the dough to chill in the fridge, generously grease or flour the bowl. It's going to stick
_aggressively_. Or don't, and scrape it down. It's your own adventure.

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "chess-cat.jpg", 'photo_classes' => 'w-1/2 lg:w-1/3'])

Important facts: 

1. There is not much to do while waiting for dough to rise.
2. an unspayed female cat is called a Queen
3. I will never be competitive in the world of human chess
4. Air Bud made $27.8M on a budget of $3M
5. Netflix, please call me about Season 2 of Queen's Gambit starring Atlas
    
<img src="{{$page->imgpath}}dough-rise.jpg" class="w-2/3 text-center mx-auto" />
@endcomponent

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 6, 'total' => 89 ])
</div>
