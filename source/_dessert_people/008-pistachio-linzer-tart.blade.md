---
draft: false
title: "Pistachio Linzer Tart"
slug: "pistachio-linzer-tart"
imgpath: "/img/dessert-people/pistachio-linzer-tart/"
img: "banner.jpg"
date: "2021-02-07"
description: "High-effort mediocrity in spades"
verdicts:
    "Pistachio Linzer Tart":
        troy:
            stars: "3.500"
            verdict: "I didn't mind eating this, but I wouldn't choose to make it again"
        rhi:
            stars: "1.5"
            verdict: "If I wanted Nutri-Grain (I don't), then I'd buy some"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

Everything about this recipe _felt_ like it should be a slam dunk. I love pistachios, I love tarts, I love fruit.

But honestly, after hearing that this is basically a Nutri-Grain bar, I was unable to shake that image and, frankly,
even if Nutri-Grain tasted good I'm not sure I could be comfortable being the person who spends several hours making
mediocre granola bars that I could buy for a couple bucks.

@component('_partials.dessert-people.photo-left-side', [ 'video' => $page->imgpath . "process.mp4", 'photo_classes' => 'w-1/3' ])

@component("_partials.dessert-people.pro-tip", [ 'author' => "troy", "variation" => 7])
If you still haven't caught on that a good food processor is worth it, you're not listening.
@endcomponent

@endcomponent

<div class="mt-8"></div>

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "plop.jpg", $page->imgpath . "spread.jpg", $page->imgpath . "jam.jpg" ] ])
I've definitely started to appreciate Claire's love for the offset spatula, but to be honest its name frustrates me.

There are two spatulas in this photo. One is silicon, red and used for cleaning bowls. One is metal, rounded, very flexible and
couldn't clean a bowl for its life. Also half the time the thing I flip grilled cheese with is called spatula.

Get more words, chefs.
@endcomponent

<hr class="mt-8" />

@include('_partials.image', [ 'name' => 'design.jpg', 'caption' => "If piping doesn't work, then just use a wooden skewer and etch your own design"])

@include('_partials.image', [ 'name' => 'final.jpg' ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 9, 'total' => 89 ])
</div>
