---
draft: true
title: "Classic Birthday Cake"
slug: "classic-birthday-cake"
imgpath: "/img/dessert-people/classic-birthday-cake/"
img: "banner.jpg"
date: "2021-03-14"
description: "\"classic birthday cake\" is probably supposed to have rainbow sprinkles within, no?"
verdicts:
    "Classic Birthday Cake":
        troy:
            stars: "2"
            verdict: "I tried very hard to like cake. I couldn't pull it off. Make pie instead"
        rhi:
            stars: "3"
            verdict: ""
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 12, 'total' => 89 ])
</div>
