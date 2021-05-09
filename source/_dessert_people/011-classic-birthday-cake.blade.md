---
title: "Classic Birthday Cake"
slug: "classic-birthday-cake"
imgpath: "/img/dessert-people/classic-birthday-cake/"
img: "banner.jpg"
date: "2021-03-14"
description: "\"Classic birthday cake\" is probably supposed to have rainbow sprinkles within, no?"
verdicts:
    "Classic Birthday Cake":
        troy:
            stars: "2"
            verdict: "I tried very hard to like cake. I couldn't pull it off. Make pie instead"
        rhi:
            stars: "3.0"
            verdict: "It was too rich and too dry."
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

A big risk in buying a book with a picture of a cake on the front and then committing to baking every recipet in the book
is that cake is bad. Just generally cake is flavoured like "sugar", it is too cloyingly sweet, it's often uninteresting
and there's just too much of it.

This recipe suffers from all of the above.

<div class="bg-grey-100 shadow-md rounded md:-mx-8">
    <div class="p-4"></div>
    <div class="flex flex-wrap items-center justify-center px-4 pb-4">
        <div class="w-1/2">
            <img class="" src="{{ $page->imgpath }}/brontosaurus.jpg" />
        </div>
        <div class="w-1/2">
            <img class="" src="{{ $page->imgpath }}/tracks.jpg" />
        </div>
        <div class="w-1/2">
            <img class="" src="{{ $page->imgpath }}/side.jpg" />
        </div>
        <div class="w-1/2">
            <img class="" src="{{ $page->imgpath }}/slice.jpg" />
        </div>
    </div>
</div>

The worst part about this recipe was that it had the _potential_ to be very, very good. Immediately after cutting the layers
of cake out of the oven, when it was still warm, we ate some of the cake scraps and they were moist and incredibly flavourful.

Putting some icing on them was 10/10 delicious. Unfortunately after putting together the cake, frosting it, and leaving it
covered in the fridge overnight as the recipe suggested, the whole thing became dry, surprisingly less flavourful, and it
got that typical spongy and unappealing cake texture.

Shame.

@include('_partials.image', [ 'name' => 'top-down.jpg' ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 12, 'total' => 89 ])
</div>
