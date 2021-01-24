---
title: "Malted \"Forever\" Brownies"
slug: "malted-forever-brownies"
imgpath: "/img/dessert-people/malted-forever-brownies/"
img: "banner.jpg"
date: "2021-01-09"
description: "Forever is a long time, these brownies lasted a couple days."
troy_stars: "4.0"
troy_verdict: "I want more cake, less fudge."
rhi_stars: "5"
rhi_verdict: "It contains chocolate"
---

<h3 class="text-center font-black text-2xl text-red-900">The Verdict</h3>

@component('_partials.dessert-people.verdict')

@slot('troy_stars', $page->troy_stars)
@slot('troy_verdict', $page->troy_verdict)
@slot('rhi_stars', $page->rhi_stars)
@slot('rhi_verdict', $page->rhi_verdict)

@endcomponent

I can appreciate how these brownies are a "good recipe". I can appreciate how people enjoy them. I guess I enjoyed them too.

But I felt like I was eating fudge, not a brownie. I wanted more structure. I don't think these are my "forever".

There was, however, dissent in that regard.

<img src="{{ $page->imgpath }}dissent.jpg" class="max-w-md mx-auto" />

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "malted-milk.jpg", 'photo_classes' => 'w-1/2'])

<h2 class="text-2xl font-black">Important information for international bakers</h2>

This recipe calls for malted milk, and the Save-on-Foods on 80th ave
in Edmonton does _not_ stock malted milk of any kind.

If you are buying a plane ticket to complete your grocery trip, do not,
I repeat _DO NOT_ book your flight to land at the Save-on-Foods on 80th ave in Edmonton.

You can stop at No Frills and get some peanut punch while you're there. Thanks, [@BryanMcclean and @dirklancer](https://twitter.com/BryanMcclean/status/1344125834290814976).
@endcomponent

@component('_partials.dessert-people.photo-left-side', [ 'photo' => $page->imgpath . 'double-boiler.jpg' ])
It's Thursday evening, it's been a long day, we're tired, and we were just going to make something easy, like brownies.

You want me to "bloom" the cocoa, then make a double boiler, Claire?! I know I bought this book so I _could be_ pretentious
about baking, but still... Brownies are supposed to be "mix in bowl, put in oven", right?

@component('_partials.dessert-people.pro-tip', [ 'author' => "troy", 'variation' => "3" ])
When it looks like shit, that's how you know it's not.
@endcomponent

<img src="{{ $page->imgpath}}looks-bad.jpg" class="max-w-full" />

@endcomponent

While every recipe will advise you to make a mise-en-place, that's sort of like wearing safety glasses when doing home
construction. Sure, you should, but... Well you've gotta wait for the chocolate to cool to lukewarm, so maybe take this
one time in your life to get the nagging recipe book off your back.

<img src="{{ $page->imgpath}}mise-en-place.jpg" class="max-w-full" />

@component('_partials.dessert-people.justify-around-gallery')
<img src="{{ $page->imgpath}}whisk.gif" /> <img src="{{$page->imgpath}}pour.gif" />
@endcomponent

If you serve warm, with ice cream it tastes a lot like a chocolate lava cake. If you serve at room temperature, you're eating
fudge. Make of that what you may. Apparently I'm in the minority here.

@component('_partials.dessert-people.justify-around-gallery')
<img src="{{ $page->imgpath}}share_olivia.jpg" class="w-1/3" /> <img src="{{$page->imgpath}}share_nicola.jpg" class="w-1/3"/>
@endcomponent


@component("_partials.dessert-people.photo-left-side", [ 'photo' => $page->imgpath . "final.jpg", 'photo_classes' => 'w-1/3'])
@component("_partials.dessert-people.pro-tip", [ 'author' => "rhianna", 'variation' => 3 ])
This recipe contains chocolate, therefore it is advised that you make it.
@endcomponent
@endcomponent

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 3, 'total' => 89 ])
</div>
