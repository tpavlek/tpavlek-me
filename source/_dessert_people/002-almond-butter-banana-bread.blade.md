---
title: Almond Butter Banana Bread
slug: "almond-butter-banana-bread"
imgpath: "/img/dessert-people/almond-butter-banana-bread/"
img: "banner.jpg"
date: "2021-01-07"
description: "I didn't go bananas for this bread. Choc-olate it up to a lack thereof."
troy_stars: "3.5"
troy_verdict: "Sorry Claire, it's not **BA's Best**."
rhi_stars: "2.5"
rhi_verdict: "I didn't go bananas for this bread. Choc-olate it up to a lack thereof."
---

<h3 class="text-center font-black text-2xl text-red-900">The Verdict</h3>

@component('_partials.dessert-people.verdict')

@slot('troy_stars', $page->troy_stars)
@slot('troy_verdict', $page->troy_verdict)
@slot('rhi_stars', $page->rhi_stars)
@slot('rhi_verdict', $page->rhi_verdict)

@endcomponent

<hr class="mt-8 mx-auto w-1/2 border-b-1 border-grey-200"/>

The problem with banana bread recipes is that they're going to be competing with [BA's Best Banana Bread](https://www.bonappetit.com/recipe/banana-bread),
which has chocolate, crispy sugar, a fudgy, dense, heavy banana texture and makes you feel like you're _consuming_.

This recipe, while good, felt like I was eating a frilly cake that I should have with tea or something.

Though it smelled a lot like coconut, the coconut flavour was subtle and enhanced what was there. The texture was very
light and fluffy and I felt like I could eat a lot of it. And it did taste better the second day once it had time to firm up,
it was a bit too crumbly to smear butter on after it came out of the oven. Toasting it the day after was a good idea.

But, critically, banana bread is constitutionally protected as a trashy food and this doesn't deliver on that.

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "roast.jpg" ] ])
Maybe my error was starting by roasting my own almonds which instantly made this 20% more bougie
@endcomponent

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "spices.jpg", 'photo_classes' => 'md:w-1/3' ])
Keep in mind when baking the law of spices:

> No matter how many spices you have in the cupboard, and no matter how haphazardly they're piled, you will always
> be missing the one that you need.

Apropos of nothing, equal parts cinnamon and nutmeg is a decent substitute for cardamom.
@endcomponent


<div class="flex flex-col mt-8 items-start">
    <img class="w-full" src="{{$page->imgpath}}prep.jpg" />
    <div class="flex-grow flex flex-col-reverse md:flex-row md:space-x-4 items-center mt-4">
        <div markdown="1">
This is an extremely complex recipe that involves doing things like "putting ingredients in bowls" and "mixing".

But I'm sure you all know that, because literally 100% of people on earth made banana bread in March and April of 2020.

@component('_partials.dessert-people.pro-tip', [ 'author' => "troy", 'variation' => "2" ])
That expensive Breville food processor you bought after the catastrophic failure in Pistachio Pinwheels is going to be
very effective at chopping almonds.
@endcomponent
        </div>
        <img src="{{ $page->imgpath}}food-processor.jpg" class="mt-4 md:mt-0 md:w-1/2 text-center mx-auto" />
    </div>        
</div>


@component('_partials.dessert-people.photo-left-side', ['photo' => $page->imgpath . "swirl.gif" ])

There is no undoing the "swirls" on top of this loaf. So if you plop too much on and it starts to spread
and by the time you're swirling it's already everywhere, just stick that knife in and commit. 

This was an easy recipe, remember?

@component('_partials.dessert-people.pro-tip', [ 'author' => "rhianna", 'variation' => "2" ])
If you grew up in a peanut-free house where almond-butter was a poor substitute for the real thing... prepare for
an oh-too-familiar disappointment
@endcomponent

@endcomponent

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "get_it_for_the_gram.jpg", 'photo_classes' => 'md:w-1/2'])

Above all else, you must be prepared to do anything to get it for the gram.

Projects like these don't make themselves.

<img src="{{ $page->imgpath }}aoife_wants_bad.jpg" />
@endcomponent

<div class="mt-8">
<img src="{{ $page->imgpath }}banner.jpg" class="w-full" />
<div class="flex">
    <img src="{{ $page->imgpath}}troy_rhi_enjoy.jpg" class="w-2/3" />
    <img src="{{ $page->imgpath}}mike_share.jpg" class="w-1/3" />
</div>
</div>

@component('_partials.bigass-quote')
Good to the last drop!
@endcomponent

The feedback from our guest this time was that they liked it
more than us, but we should replace the almonds with apples and make apple pie banana bread.

They are not wrong about that.

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 2, 'total' => 89 ])
</div>


