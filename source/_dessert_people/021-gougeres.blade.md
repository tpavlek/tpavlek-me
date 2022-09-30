---
draft: true
title: "Gougeres"
slug: "gougeres"
imgpath: "/img/dessert-people/gougeres/"
img: "banner.jpg"
date: "2021-12-26"
description: ""
verdicts:
    "Gougeres":
        troy:
            stars: "4.5"
            verdict: "Lil cheese puffs with lil good taste"
        rhi:
            stars: "5"
            verdict: "They were the best ever. They taste like a real dessert"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 17, 'total' => 89 ])
</div>
