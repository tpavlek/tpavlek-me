---
title: "Chewy Molasses Spice Cookies"
slug: "chewy-molasses-spice-cookies"
imgpath: "/img/dessert-people/chewy-molasses-spice-cookies/"
img: "banner.jpg"
date: "2021-04-23"
description: "Really good gingersnaps"
verdicts:
    "Chewy Molasses Spice Cookies":
        troy:
            stars: "4.50"
            verdict: "They were better than the brownies"
        rhi:
            stars: "5.0"
            verdict: "They were the best ever. They taste like a real dessert"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

The name of this recipe is a little more pretentious than "Gingersnaps", but these are really good gingersnaps.

@include('_partials.image', [ 'name' => 'plate.jpg' ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 15, 'total' => 89 ])
</div>
