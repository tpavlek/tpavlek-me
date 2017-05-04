---
title: "The Alberta Open Data Summit: Recap and Thoughts"
date: "2016-10-16"
imgpath: "/img/posts/2016-10-16-alberta-open-data-summit/"
img: "jeopardy.jpg"
description: "Alberta's first open data summit had talks about open data maturity, storytelling, power dynamics, analytics, and just a little bit of fun and games. Troy Pavlek shares his thoughts on the inaugural event."
tags: 
    - "open-city"
---

This weekend, I attended and presented at the [Alberta Open Data Summit](http://albertaopendatasummit.ca/) hosted
by EPL at the Stanley Milner Library downtown. I'd never been to an "open data" conference before and because of the ambiguity
of the subject matter, I didn't really know what to expect. What follows is a recap of my experiences and thoughts from the event,
though it was a three-track conference, so the experience of each attendee is likely to vary quite a lot.

I think the biggest takeaway from the event is that Edmonton is uniquely positioned, both from a city administration perspective and from the perspective
of the wider, active community, to do some really cool things with Open Data. We're ahead of the curve compared to many municipalities
(#1 in Canada!), and now is a great time to capitalize on that.

### The Keynote

The event was keynoted by Jean-Noé Landry, executive director of Open North, an organization focused on the implementation
of open data in civic, government and other organizations. It was an interesting recap of where we are, how we got here, and
what's ahead, but it was very much a bird's-eye view.

The most interesting part of the presentation for me was when he started getting into the indicators of "open data maturity"

@include('_partials.image', [ "name" => "maturity.jpg","caption" => "It took all my willpower not to turn the first point into a dig at the Smart Travel app" ])

The slide was especially interesting to me because of how on-the-nose it was in the context of Edmonton. We're still in
many cases on the left-hand-side or in the transition between but in general our *policies and direction* put us as targeting
the right-hand-side quite aptly. We've got [city policy C581](https://www.edmonton.ca/city_government/documents/C581.pdf) guiding
us to our target of an Open City. It touts "open-by-default" data and the systemic changes that Jean-Noé talked about. We have
the Council Initiative on Public Engagement tackling some of the more difficult consultation issues the city has had.

We're still relying on Open Data "champions" to some extent though, and there hasn't been much movement to adopt the 
[International Open Data Charter](http://opendatacharter.net/) and enshrine some of the implementation in Bylaws, rather
than just general city policy. We're still relying on FOIP - and completed FOIPs are not being added to the Open Data Catalogue.
During the conference, one of the representatives from the province piped up with what I thought was a very interesting note

> Once a FOIP request has been completed, that information is public. There is no issue with publishing that data
  afterward.
  
I thought that was an *especially* interesting thought, and one that lends itself to the idea of **progressive opening of data**.
The City of Edmonton has processed 353 FOIP requests through the full FOIP process so far this year - all those questions and
answers could be released, since the work is already done. Answer a question, and one person will know a fact. Publish your answers,
and an entirety society will learn. 


### The Future of Open Data in Edmonton with Matt, Elise and Mack

[Matt Dance](https://twitter.com/mattdance), [Mack Male](https://twitter.com/mastermaq) and [Elise Stolte](https://twitter.com/estolte) took the stage to talk about how open data is changing the stories we
tell, how we tell them, and upending typical power dynamics.

@include('_partials.image', ["name" => "panel.jpg","caption" => "Photo credit to @geodarcy on Twitter"])

The most powerful portion of the talk, in my opinion, was Elise Stolte recalling how data availability shone a light on
[incredible numbers of absences at First Nations' schools](http://www.pressreader.com/canada/edmonton-journal/20120603/282548720329499).
She discussed the origin of the story in which one person simply pulled and analyzed two data sets to find massive absences
on his reserve. The Journal then used its resources to gather data for all reserves in Alberta, and suddenly a massive issue
was being brought to the front of the conversation. Open Data represents a massive shift into how stories can be developed.
Suddenly anyone with access to data and a question can begin seeking answers and can find new interpretations of data
that others might have missed.

Matt Dance echoed some of her comments, delving into the idea that Open Data has relatively shifted the power balance municipally.
Where in the typical setup, decision-makers at the top held all the power and placated citizens through "informing" them, that
idea gets flipped on it's head and the balance of power becomes more flat when citizens are able to not only engage, but shape
the conversation and lead with a sort of delegated authority. When decisions are made through public information, rather than
secret information that only decision-makers are privy to, it creates a partnership between the public and the decision-makers
that we haven't really seen before.

[Paths for People](http://pathsforpeople.org/) was brought up as an excellent success story of this type of engagement. They used
data they collected via FOIP to provide context before allowing open engagement with everyone to shape the ideal minimum grid.
Every participant became an active decision-maker in the process. And oh boy [have they seen some success](http://edmontonjournal.com/news/local-news/council-approves-protected-edmonton-downtown-bike-lanes-for-2017).

### Machine Learning for Municipal Resource Allocation

Another highlight of the summit for me was a talk by [Koosha Golmohammadi](http://kooshanet.com/) in which he delved into 
the [Analytics Centre of Excellence](http://ace.edmonton.ca/) at the City of Edmonton. He went into the most detail about 
the ways in which the city is using data and analytics to optimize turf maintenance. For computing scientists, it's pretty 
quick to recognize that the deployment of turf maintenance crews is a fairly typical [travelling salesman problem](https://simple.wikipedia.org/wiki/Travelling_salesman_problem) (which we know is NP-hard). 
Crews need to get to, and perform work, on a number of sites with the goal being to spend as little time as possible travelling between sites. 
He shared interesting details about how the old method of dividing the total number of sites into geographical quadrants had started to 
fall out of favour thanks to their work. Now, the grouping of sites is based on approximations from their analytics software.

It's early days for this stuff, but I was incredibly excited to see the city treating data as a first-class asset and 
using available data to optimize operations. These are the kind of changes that are going to yield incredible efficiencies 
down the pipe.

### Open Data Jeopardy

The whole thing ended with me doing one of my favourite things: hosting a Jeopardy game - this one all focused on Open Data.

@include('_partials.image', ["name" => "jeopardy.jpg","caption" => "What is BIG SHINY BALLS?"])

It was the first Alberta Open Data summit - there were plenty of places for improvement should the conference continue in future years
(likely not next year though: we're hosting the [Canadian Open Data Summit](http://opendatasummit.ca/)!) but I don't think it can be
undersold what a value it is that Alberta is *able* to host such an event.

In many areas, Edmonton is critized as falling behind, implementing things badly or failing where other cities succeed (bridges, trains
and painted bike lanes all jump to mind). But in this case, Edmonton has the opportunity to come out front in Canada, and in some cases
*internationally*. We have the opportunity to pave the way and shape exactly how we think a modern-era open city should look.

We're at the top of the game in Canada, for two years running. Let's capitalize on that and show that when Edmonton dedicates itself to 
innovation, we make *good stuff*. And then maybe we can invite [Tristin Hopper](http://news.nationalpost.com/full-comment/tristin-hopper-the-600-million-edmonton-train-that-snarls-traffic-slows-down-transit-times-and-increases-emissions) to come to Edmonton and immersive himself in Edmonton's competence. Gawk at our aptitute. Because when all data is freely and openly available "decent, right-thinking" people don't need convincing of anything, they can come to the correct conclusion on their own.



