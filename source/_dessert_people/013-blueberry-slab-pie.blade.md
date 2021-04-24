---
draft: true
title: "Blueberry Slab Pie"
slug: "blueberry-slab-pie"
imgpath: "/img/dessert-people/blueberry-slab-pie/"
img: "banner.jpg"
date: "2021-04-05"
description: ""
verdicts:
    "Blueberry Slab Pie":
        troy:
            stars: "5.0"
            verdict: "The crust is tasty and crispy, the filling is not-too-sweet and perfectly spiced"
        rhi:
            stars: "3"
            verdict: "I don't know what to say, I don't like pies. It was fine, I guess?"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 13, 'total' => 89 ])
</div>
