---
title: "The Metro Line project: the antithesis of Open Government"
date: "2016-08-31"
imgpath: "/img/posts/2016-08-31-metro-line-is-black-box-governance/"
---

*This post was adapted from a comment I posted on the [Edmonton Journal Article](http://edmontonjournal.com/news/local-news/update-on-the-metro-line-at-executive-committee) that got
rather lengthy and deserved broader sharing*

There are few members of Edmonton's current City Council that haven't touted Open Government as a pillar of their platform
and extolled its advantages. It's an alluring concept, the electorate being able to see clearly everything that administration
and council does, making decisions transparent and the decision-making process one that can be replicated by any informed
citizen looking at the information.

Which makes it all the more of a pity that we're simply not there, and I don't see anyone really pushing the envelope on the issue.

There are plenty of examples we could draw from, but lets focus on the *Metro Line*, the epitome of failure when it comes
to open (and effective) government.

First, an understanding of why the Metro Line has been such a catastrophic failure. It's not so much a factor of civil design,
we built the stations and tracks fine, all things considered. The failure has come purely from a software side, with the
contractor, Thales, who was supposed to implement a "Communications Based Train Control" (CBTC) system. This differs from
the Capital Line "Fixed Block" signalling system. In a "Fixed Block" system, the rail is divided into "blocks" and only one train
can be in any block at any one time. A CBTC system uses radio communications to pinpoint the location of each train, and dynamically
alters speed and acceleration so that each train remains a safe distance apart, but has more flexibility in terms of scheduling. It also allows
trains to be closer together, which can increase frequency. This also makes CBTC signalling incompatible with fixed-block, which is
why Capital Line trains had to run in reduced frequency, and Metro Line trains had to be manually operated via "line-of-sight" eg. not
even using the signalling system at all.

{% include 'image.html.twig' with {name:"fixed-vs-moving-block.jpg", caption: "Wikipedia provides a solid visualization for the advantages" } %}

The communications-based train control contract awarded to Thales which is the source of all these slowdowns and mishaps 
is over fifty million dollars. All official reports simply say there is a "software problem" and give what amounts to 
condescending explainations about how complicated it is to integrate new technology with old.

Any software developer knows how incredibly complex integrating with legacy software is, and knew from the very beginning 
that it would *not* get done in the timelines. Thales **proposed a more aggresive timeline than the four other bidders, *and* was then told to shorten its timeline in the contract finalizing stage**. 
It was a mismanaged software project put forward by a firm that overpromised and can't-even-deliver.

And what does the public get? This black box of "it didn't work before but maybe it will later". *What* didn't work? 
Where are the architecture designs and documents? What are the acceptance tests? What disparate communication 
protocols are they using and why don't they work together? Why has this caused every departure sign in the
city to be unoperational for over a year?

If we were building a fifty million dollar bridge, and it collapsed halfway through and the only explanation given to 
the public was "it was a metal problem", the population (and council) would be **livid**. Software is the new-generation's 
infrastructure projects. Software projects can become huge in terms of budget and scale and can have massive gains for a municipality. 
Why do we accept this sort of black-box, completely obfuscated reporting structure for software projects, when we'd absolutely reject it for any other infrastructure project?

We need real reports on what *exactly* went wrong, and what *exactly* is being done to fix it, or we need the code released for public inspection and audit. 
The contractor and project management has lost our trust on this project - to the point where we literally hired an 
external consultant because we didn't believe the primary contractor's claims that the railway was safe. 
Why are we being expected to trust cryptic, uninformative status updates that have proved time and time again to be inaccurate - we just missed *another* deadline, after all.

During the recent status update Michael Oshry posed the question asking at what point do we give up, throw out the software and start anew.
Administration told him it's best to keep on truckin' - but based on what? If a professional software developer can review 
*all* of the public documentation related to a *publicly funded* project and tell you **absolutely nothing** of substance
about it, then we've failed catastrophically at open government. 

If everything substantive is hidden from the public, then public meetings and governance is just a long, drawn-out and very dry farce.
