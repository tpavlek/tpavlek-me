---
title: "Tools shouldn't get in the way - why I dumped Ruby on Rails to stick with PHP"
slug: "tools-shouldnt-get-in-the-way"
date: "2013-06-05"
tags:
    - programming
    - ruby
    - php
    - software
---

I'm a PHP developer, through and through. We should get that out in the open and disclosed right off the bat, because that
simple fact might be argued to cast a pretty significant bias over what I'm about to say. If I say it right, however,
the bias shouldn't matter.

I love PHP, to the point where I'm often made fun of. It's more than a gentle longing for a programmer's language of
choice, or a carpenter's fondness for his favourite hammer - it's almost fetishized. Writing PHP makes me happy,
incredibly so. Even though in my head I say "class dot method" when I'm writing "class-&gt;method" that somehow makes
it more fun. The disconnect between what's happening in my head and what my hands are doing, what they're _instinctively_ 
doing just seems to make the whole thing more exciting. I could gripe all day about the common problems with PHP: $needle, $haystack. 
Inconsistent naming of functions. Admittedly still weak implementation of many OOP concepts. 
But if I did, I'd only be making a show, because I don't hate these things, nor do I want to complain about them. 
They're the character of PHP, and it's the character of PHP that I love. I had groupwork for class last term, a smallish to 
medium sized application that would be fairly simple: implement a berkely db querying system that runs on the command line. 
Most of my classmates ran for python. Several to Java. A couple to perl. I went to PHP. There's a dirty feeling writing desktop PHP applications. 
It's scandalous. People disapprove. I loved it.

If you're wondering why I'm spending so much time clarifying my love for PHP, it's because of what comes next. I want to 
make it abundantly clear what a monumental decision it was to dump PHP, throw my years of work to the sidelines and switch 
to ruby on rails. The inkling had been in the back of my mind for well over a year. Ruby is the (node.js and all the new 
javascript backends notwithstanding) startup culture language du jour. All the buzz is around rails and the 0 to application 
in no time flat that many are able to achieve with it. Couple that with a modern everything-is-an-object language, with 
syntactic sugar to enable programmer joy and it sounds like an idealist heaven. I'd played with irb a few nights, trying to 
implement pseudocode algorithms (python), and see what cool shortcuts I could take with the language. It was fun, I enjoyed it, 
but then it fell to the backburner. I had work to do. I had projects to build. My PHP work demanded me attention, and my attention I gave.

The crucial turning point happened about a month ago now: I was at CUTC Infect, and undergraduate technology conference in 
Vancouver. The morning keynote was from Zach Holman, at Github, and he was an absolutely fantastic speaker. He talked a 
bit about startup culture at github, cracked quite a few jokes, stressed the importance of positive reinforcement and then 
professed his fondness of ruby. Rather ironically, he talked about how he felt when he was writing ruby and rails applications - 
the tools just melted into the background. He focused on problems and on solutions, not on the keystrokes and clicks and files 
standing between him and the implementation. I was in awe, and excited about it. This guy, who writes pretty damn fantastic 
code was talking about a programming utopia that I longed to be in. He stressed the unimportance of technology, how Github uses 
outdated versions of rails because their version works, so honestly it doesn't matter that they haven't upgraded, as long as 
they're still making solutions. I asked him for clarification on this point after the presentation, how can you determine 
what is a technology you want to learn and benefit from, and what is the drivel that you have to filter out to keep from 
constantly shooting at a moving target. He was a little stumped at this, he said he kind of just knew, that perhaps after
using a certain tool or set of tools for long enough you begin to understand what you actually need and you look for things to fill that need.

Clearly, I had a need. I loved to program, and I hate setting up my environment for programming. I hate worrying about servers,
and IDEs and config files. I just like to write code that solves problems. I needed my tools to fade to the background. I needed ruby.

The night of the conference Facebook sponsored a Hackathon. My team didn't end up winning, and why we didn't end up winning
really isn't the point (collaboration is hard, especially when you don't know your team), the point was one of the problems
I had during the hackathon. We were essentially building the Nexus Q, a webservice that would allow connected Android applications
to request YouTube videos, then everyone present could upvote and downvote everything in the queue, determining what was to be played.
My job was to implement the webservice and frontend. I was still fidgeting from Zach's presentation: I wanted to build this in rails,
but I at least had some tact. I knew this wasn't the time. I had next to no knowledge of how to implement things in the rails framework,
and an all-night, time-constrained hackathon is not the time to learn a new framework. So I turned to PHP, and started implementing
a REST API. From scratch. I didn't pull any frameworks or helpers, or crawl github for something already implemented, I just
implemented the webservice because that was what I knew how to do, and dammit I was going to do it.

It was slow-going. I needed ruby.

I got back from Vancouver both motivated and demotivated. I would have liked to win the hackathon, and their cash prize,
and the trip to Facebook but life doesn't always go your way. I was motivated to make life go my way. I was going to learn ruby.
I was going to rebuild my sites in rails. I was going to learn this framework and then all my tools would fade into the background,
just like they do at Github. Just like they do for Holman.

For about the first half of the month, I was working extremely diligently toward this goal: after my full-time job writing code,
I would come home and put in another 8 hours digging through the framework. I would stick my hands in and try to make it work.
I used the same method I used when I initially learned PHP: find something I want to do, try to implement it, fail, and then
read online about how to actually implement it. Instead of imagining things to implement, I just took my site already built in
PHP, and started porting it, page-by-page, feature-by-feature to rails. It did not go well. I didn't often use frameworks in
PHP, but at work I write in ASP.net MVC, so MVC frameworks didn't seem all that foreign to me. Everything in rails seemed
foreign though. Rails was so opinionated about everything it did. There was an asset pipeline, and that was how you were
supposed to render assets. I spent hours (tens of, maybe?) trying to figure out and deal with a strong_parameters error, that
I didn't know existed. Hindsight is 20/20, but I was probably learning wrong. In the moment, however, I just got increasingly more frustrated.

I'm quite belligerent when it comes to developing software. I truly think that programmers are modern-day magicians. We start
with nothing, sit down at a terminal and then after some undisclosed amount of time and a healthy amount of "fuck"s, software is
born. Out of nothing, we create something that solves a problem or does something cool. I've also learned that when confronted
with any problem, given enough time to break it down any good programmer can solve it. It might take years, but it's solvable.
You just need time. So I continued my attempts at rails, but to make progress even quicker, I'd give myself a larger carrot.

I try to develop a lot of software in my free time - I love writing code, so it seems like a pretty good use of my free time.
Due to this, I'll almost constantly think up new ideas for projects and, in the past, I would have begun building them. However,
I was determined to learn rails, so I told myself: "Any project I build, I will build it in rails. Then I'll be able to go from nothing
to full applications in no time flat, and the tools will fade away". So I did "rails new SuperRadProject" and "rails new ThisWillChangeTheWorldWhenItsBuilt"
each week. None of them got off the ground at all. The combination of the unknown structure of rails as a framework, and the
completely foreign syntax and idioms of ruby prevented me from ever progressing very far. And the frustration continued to build.

"How could this be? I've given this all my time and effort and I've barely progressed! It's been a month, and I don't feel any closer!".
My backlog of projects only grew and grew until it was uncountably large. I hadn't actually built anything I love since I started
this whole rails fiasco. But if only I could learn I would build applications so quickly. The realization hit me when I was
talking with the friend with whom I share a VPS. I'd tried, and failed, to set up rails with lighttpd (his webserver of choice),
so I asked for help. He tried, and was finding it difficult to do in a way that didn't feel like a hack. It all came over
me like a flood: this tool is _in my way and needs to be removed_. Sure, ruby and rails have some great syntactic sugar
and can enhance developer joy, but they are doing nothing for _my_&nbsp;developer joy. When was the last time I was happy?
When I was writing PHP. I don't have issues running PHP on my webserver. I don't have issues with mass assignment of
parameters in PHP. And I most certainly don't have an issue with trying to figure out what exactly that block of ruby
code is doing when it doesn't have any curly braces or semicolons anywhere. The thing that I realized, probably a month too
late, is that I grossly interpreted the message of the keynote. In pursuit of the tool that got out of the way, I shoved
all the tools directly in the way. My pursuit of rails wasn't about expanding my horizons or personal development growth,
no matter how many times I told myself it was. My pursuit of rails was a juvenille attempt to be exactly like those cool
guys at startups who implement things quickly and with joy. I was childishly trying to be exactly like Zach Holman because
he told some funny jokes while extolling the virtues of his tool that got out of the way. However, it came full circle:
PHP was a language that my hands spoke, even when my brain talked differently. PHP was the language that got out of the way.

I have no doubt ruby is a fantastic language, and may have many benefits over PHP for some. However, it has no benefits
for me because after this month I can say that even with all these cool features of ruby and all the questionable things
the PHP developers hacked into the language over its years of growth that frankly, &nbsp;I don't really like ruby. I love PHP. And that's alright.
