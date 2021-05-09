---
draft: true
title: "Loaded Corn Bread"
slug: "loaded-corn-bread"
imgpath: "/img/dessert-people/loaded-corn-bread/"
img: "banner.jpg"
date: "2021-04-05"
description: ""
verdicts:
    "Loaded Corn Bread":
        troy:
            stars: "0"
            verdict: "The coveted zero-stars. I threw it out."
        rhi:
            stars: "2"
            verdict: "I would rather individually eat the uncooked ingredients"
---

@include('_partials.dessert-people.post-verdict', [ 'verdicts' => $page->verdicts ])

This recipe was made late-night when we were hungry and wanted a snack. It smelled so good, and
we honestly didn't think we'd survive until it was ready.

Even with the benefit of intense hunger it was incredibly disappointing. Would not recommend.

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 13, 'total' => 89 ])
</div>