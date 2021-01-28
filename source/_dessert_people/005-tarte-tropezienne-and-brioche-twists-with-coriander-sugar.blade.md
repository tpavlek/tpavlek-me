---
title: "Tarte Tropézienne / Brioche Twists with Coriander Sugar"
slug: "tarte-tropezienne-brioche-twists"
imgpath: "/img/dessert-people/tarte-tropezienne-brioche-twists/"
img: "banner.jpg"
date: "2021-01-27"
description: "Brioche day finds the best recipe in Dessert Person so far!"
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

@component("_partials.dessert-people.pro-tip", [ 'author' => "troy", "variation" => 5])

Scripture (_Dessert Person_) tells us that "when it comes to brioche things can get very sticky and a little messy"
<br />

**Believe Claire**. Use a mixer.

@endcomponent
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

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "roll.jpg", $page->imgpath . "butter.jpg", $page->imgpath . "coat.jpg", $page->imgpath . "shape.jpg"] ])
Makin' a wee lil' assembly line. The twist really didn't want to stay wrapped, so I tried making them a bit longer and that definitely
made it easier to twist, but I also ran out of sugar/coriander mixture and had to stir some more.

Oh no. More sugar. Whatever shall I do?
@endcomponent

When putting the brioche in the pan you're going to want to roll it as level as possible or you're going to get the
most lumpy-space-princess version of a Tarte Tropézienne.

<div class="lg:-mx-8 shadow-lg">
<img src="{{ $page->imgpath}}lumpy-loaf.jpg"  class="w-full"/>
</div>

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "focus.jpg", 'photo_classes' => 'w-1/2'])
@component('_partials.bigass-quote')
FOCUS!
@endcomponent
@endcomponent
<video src="{{$page->imgpath}}cut-bread.mp4" autoplay loop muted></video>

What they don't tell you about making two desserts at once is that by the fourth or fifth hour you're going to find 
yourself really wanting to be done and eating it. And then you get to the pastry cream section, that calls
for a **four hour refrigeration**. That simply won't do.

@component('_partials.dessert-people.photo-right-side', [ 'photo' => $page->imgpath . "canadian-winter.jpg", 'photo_classes' => 'w-1/2'])
@component("_partials.dessert-people.pro-tip", [ 'author' => "rhianna", "variation" => 5])

Canadian winter is an excellent substitute for a freezer, when you need to cool pastry cream quickly.

@endcomponent
<img src="{{ $page->imgpath }}outside-temp.jpg" class="w-full" />
<small class="italic leading-tight">Editor's note: the thermometer did not go lower than this. It was about 25 degrees colder outside.</small>
@endcomponent

@component('_partials.dessert-people.photos-caption', [ 'photos' => [ $page->imgpath . "fold.jpg", $page->imgpath . "plop.jpg", $page->imgpath . "offset-spatula.jpg" ] ])
When the book offered the _chocolate_ variation for pastry cream, there really was no option about which path to take.
@endcomponent

When all is said and done, you have two very, very different takes on brioche.

<div class="lg:-mx-8 shadow-lg">
<img src="{{ $page->imgpath}}finished.jpg"  class="w-full"/>
</div>

The twists were unquestionably a hit across the board. The Tarte Tropezienne definitely wasn't bad,
but the entire panel agreed that it was playing second fiddle to the coriander Tasty Twists™.

But, that didn't stop the panel from converting into Dessert People.

<div class="flex items-center justify-center flex-wrap mt-8">
<div class="w-full lg:w-1/2">
<img src="{{ $page->imgpath}}heidi-eat.jpg"  class="shadow-lg"/>
</div>
<div class="w-1/2 lg:w-1/4">
<img src="{{ $page->imgpath}}kra-eat.jpg" />
</div>
<div class="w-1/2 lg:w-1/4">
<img src="{{ $page->imgpath}}brandon-eat.jpg" />
</div>
<div class="w-full">
<img src="{{ $page->imgpath}}thanks-paul.jpg" />
</div>
</div>

@include('_partials.bigass-quote', [ 'slot' => "Thanks Paul!"])

<div class="mt-8">
@include('_partials.dessert-people.progress-bar', [ 'progress' => 6, 'total' => 89 ])
</div>
