---
title: "Edmonton Transit: Real Time allows for Real Decisions"
date: "2016-10-25"
imgpath: "/img/posts/2016-10-25-edmonton-transit-real-time/"
img: "ets-bus.jpg"
description: "Edmonton Transit system has equipped its 928 vehicles with real-time technology at a cost of $18 million. We need to focus on getting more data and analyzing it, to provide data-based transit."
tags: 
    - "transit"
    - "open-city"
    - "efficient-effective-solutions"
---

Earlier today, the City of Edmonton [announced](http://www.mailoutinteractive.com/Industry/View.aspx?id=855590&q=1104160819&qz=b395a2)
that the entire fleet of Edmonton Transit buses are now equipped with smart bus-tech. This represents a years-long process
that began in January of 2011 and in total cost around $18 million dollars.

It's a significant achievement of its own merit - there are 928 buses in the fleet so a nontrivial amount of
work is required to perform such an upgrade. But what most excites me about this announcement is what it indicates about the future:
we're finally positioned to deliver much better service based on real data.

@include('_partials.image', [ "name" => "transit-app.png", "caption" => "The City of Edmonton officially recommends downloading Transit App - putting the final nail in the coffin of ETS Live to Go"])

Transit is a huge item in our city budgets; the city spends over $200 million every year on transit, so it's worth getting right.
Consider [City Policy C539](https://www.edmonton.ca/transportation/C539.pdf), which sets the service standards for ETS.
There are several pages dedicated to frequency and ridership, but only two small points referring to "on-time" standards.

> Departures from key timing points from 0 minutes before to 3 minutes after the scheduled
  departure time on 90% of trips. No vehicles will leave a timing point early.
  
> Arrival times at key timing points from 5 minutes early to 1 minute late on 90% of trips. 

Consider what these "on-time" principles are trying to *accomplish*. We've all sat on a bus which is just stopped at the
bus stop for several minutes. Even more frustrating, is when another bus then pulls up and continues on before your bus proceeds
(any university student taking the 7 at 99st and Whyte knows this intense frustration). The buses need to stop at these "timing points"
to ensure that they're on schedule for the remainder of the stops on their trip. And since, for the longest time, a piece of paper
printed at the start of the season was the *only* way citizens knew when to catch their bus, it was incredibly important that
the system functioned this way.

But what about now? If you go to the front page of [edmonton.ca](https://edmonton.ca) the transit trip planner takes you
directly to Google maps, which gets bus locations in real-time. The city officially recommends using the mobile Transit app
which contains a "Go" feature that will tell you which stops to get on and off at, and what speed you have to walk between transfers based on the real-time
position of the bus you need to transfer to. The free market has already solved the user-facing side of "how do I know when to catch my bus?"
Should we still be optimizing our transit delivery around the transit user who rides around the city with 40 different schedule
brochures in their backpack?

With the data of *every* bus on *every* route and their positions all day, analytics can be pretty easily applied to bus routes. We can generate schedules
more often, and more precisely using actual, observed traffic and route slowdown data. When the city switches to "smart card" boarding
for our buses, an additional vector of ridership can be added and routes can be dynamically redistributed to fill observed demand. These iterations and
improvements can happen automatically without any human effort.

Technology can be a solution to a lot of logistical problems the City has and it's critical that as we acquire and implement
these new technologies, we constantly re-evaluate and improve our policies. In software development, because the technical details
of implementing features can often be overwhelming for those unfamiliar with programming, there is a practice called writing
"user stories", which are plain english explanations of what a user actually wants to *do*. This allows the developer and the client
to communicate easily with each other, but only the expert has to worry about the technical details. I believe these same concepts can
be applied to shaping policy. Consider the following:

> As a user, I want peak-hour transit frequency at 30 minutes with on-time performance for 90% of my buses, and no bus leaving a timing point early.

It sounds okay, sure. That probably gives you alright bus service. But it's quite technical, and it prescribes a solution. 
If that is what is important to the end-user, then there is only a single solution to the problem, and that's to run a bus every 30 minutes,
and stop buses for sometimes long periods in the middle of a route, making it slower for riders on the bus when they *could*
arrive quicker. Consider an alternative:

> As a user, I don't want to wait more than ten minutes for my bus.

And really, isn't that what's important? A user doesn't care about timing-points. A user doesn't even care if the bus he gets on
is one "scheduled" to arrive 30 minutes ago, or one that's 10 minutes early. If he's going to a destination and three different routes
all service that destination, he doesn't really care which route he gets on. All the user really cares about is that a bus
can pick him up and deliver him promptly to his destination.

@include('_partials.image', ["name" => "ets-bus.jpg","caption" => "Gotta go fast"])

If you're thinking that we can't service the entire city with such high frequency in that manner - well you're right. A balancing
act needs to be performed that weighs both the responsibility we share in making sure *everyone* has the ability to move
around our city and optimizing and dedicating our routes where they make *sense*. Just as with our bike lanes, it didn't make
sense to start in suburbia where demand was low, our transit needs to adapt as well to shifting demand. Perhaps that could manifest itself
as taking advantage of the wealth of parking in the exterior areas of the city and supplementing our LRT park-and-rides with
high frequency bus routes. Perhaps it manifests itself as a re-imagining of neighbourhood feeder routes as very short, small and frequent
routes that only go so far as the nearest high frequency connection. Perhaps it's none of those things, and a brilliant solution will be revealed
when we can overlay and analyze the actual route and ridership data.

But one thing I am certain about: real, hard data is going to play a key component in developing permanent solutions.
Edmonton is a smart population capable of tackling tough problems in a clever and innovative way. There are smart Edmontonians
chomping at the bit to tackle these problems, so let's provide them with the tools to succeed. Until these discussions
are based on concrete, reliable data, any solutions we come up with are conjecture, speculation and some shots in the dark. 

I hope we don't miss.
