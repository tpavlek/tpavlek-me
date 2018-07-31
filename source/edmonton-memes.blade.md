---
extends: "_layouts.wrapped"
title: Edmonton Memes
description: "The wonderful cross-section of YouTube meme culture, with Edmonton politics. Only the finest vintage of memes created by Troy Pavlek"
date: "2018-03-16"
imgpath: "/img/posts/2017-10-14-adding-some-levity/"
img: "sweetie-star.jpg"
---

@component('_partials.posts.post-body', [ 'title' => $page->title, 'img' => $page->imgpath . $page->img, 'date' => $page->date ])

Sometimes, I make memes on the internet. Typically, they're political in nature and a mashup of [/r/youtubehaiku](https://reddit.com/r/youtubehaiku)
culture and edmonton politics. [Subscribe on YouTube](https://youtube.com/troypavlek)

@include('_partials.youtube', [ 'video_id' => 'kNJwHqAhaxc' ])

> A GRASSROOTS DEVELOPMENT

Jason Kenney made a "grassroots guarantee", but when the grassroots chose "lake of fire" as official party platform, he
backpedaled pretty quickly. This is his story.

<hr />

@include('_partials.youtube', [ 'video_id' => '-2fzSDCGN4Y' ])

> Carla Frost, the Shooting Sweetie Star

In the 2017 Mayoral election, Carla Frost uttered the now-infamous "call me sweetie!" call to action. She's a star.

A shooting star.

<hr />

@include('_partials.youtube', [ 'video_id' => 'YyLWzXbG7yo' ])

> Radical bike lobby skews the bike grid numbers

<hr />

@include('_partials.youtube', [ 'video_id' => 'WyUwK9rrBI8' ])

> Don Iveson is an all star

All Star but it's Don Iveson. The work to return on investment ratio for this video was way too high.

<hr />

@include('_partials.youtube', [ 'video_id' => 'LozMki1UeDo' ])

> An Edmonton Infill Hertitage Moment

Created during my City Council campaign, this is a tongue-in-cheek look at the common criticisms of infill in neighbourhoods.

<hr />

@include('_partials.youtube', [ 'video_id' => 'BsUFwe86-Es' ])

> Frost, Frost, Sweetie

This one defies explanation.

<hr />

@include('_partials.youtube', [ 'video_id' => '6kgw8D849PM' ])

> It's Always Sunny in the UCP Caucus

<hr />

@include('_partials.youtube', [ 'video_id' => 'oAEw4Uv77EQ' ])

> Dandelion Apocalypse

In the spring of 2017, dandelions were everywhere as the city scaled back its herbicide use. From the reporting, you would
have thought this was a sign of the apocalypse. Perhaps it was.

@endcomponent
