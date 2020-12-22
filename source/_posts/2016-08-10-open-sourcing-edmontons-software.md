---
title: "Embracing openness: Why the City of Edmonton needs an open source strategy"
slug: "open-sourcing-edmonton-software"
date: "2016-08-10"
imgpath: "/img/posts/2016-08-10-open-sourcing-edmonton-software/"
img: "opencity.png"
description: "Open Source software is taking over governments and the civil service around the world. So why should Edmonton adopt an Open Source strategy?"
tags:
    - "open-city"
    - "software"
---

What does it mean to be an open city?

<img src="/img/posts/2016-08-10-open-sourcing-edmonton-software/opencity.png" />

Well, [according to the city of Edmonton](http://www.edmonton.ca/city_government/initiatives_innovation/open-city.aspx):

> Open City strives to transform the City of Edmonton into a more transparent, open and accessible organization; connected to the public and responsive to their vision for government.

If we look closer at the [June 2016 Open City Initiative Document](http://www.edmonton.ca/city_government/documents/OpenCity_InitiativeJune2016.pdf) there are five goals
that the city has defined to get us to the apex of where they want the _Open City Initiative_ to lead.

1. **Connect the city**. This foundational goal involves ensuring broadband is readily accessible in the public institutions in the city
 as well as being broadly available for businesses in Edmonton. It notes the incredible value of data in our new data-driven economy
 and suggests that data must be managed as a strategic resource. You might have seen some of this in the Open City WiFi being available
 in City Hall and at LRT stations. Behind the scenes some data-warehousing work is definitely taking place.
 
2. **Open Engagement**. This involves significantly rethinking and revamping how the city performs public engagement. The [Council Initiative
 on Public Engagement](http://www.edmonton.ca/city_government/initiatives_innovation/council-initiative-on-public-engagement.aspx) has been 
 taking a leading role here. For engagement to be open, however, the results need to be widely circulated and freely available as well.
 We've seen some progress here with the [Edmonton Insight Community](http://www.edmonton.ca/programs_services/public_engagement/edmonton-insight-community.aspx)
 publishing the results of all their surveys in the Open Data Catalogue.
 
3. **Open Data**. This goal focuses on expanding of the open data catalogue. [We've won some awards for our Open Data Catalogue](http://globalnews.ca/news/2456703/edmontons-open-data-initiatives-rank-1-among-34-canadian-cities/).
 We're of course, not at the endpoint here. There are plenty of sources of data that are critical for decision making - EPS is a primary example -
 that are noticeably absent from the catalogue. But good work is being done here.
 
4. **Open Information**. This is a synthesis on top of Open Data. Dumping a dataset of grafitti reports as an Excel spreadsheet is one thing - mapping those graffiti reports spatially
 and over time provides important context and understanding. In this goal the city wants to communicate more effectively and broadly the content of Open Data.
 
5. **Open Channels**. The city should not be opaque. You should not have to call three separate departments and fill out one in-person form at a 
 hidden location that is only open the third-thursday on odd-numbered months. A lot of progress is being made here with the 311 app and the new
 Edmonton Tower to create a one-stop-shop for city services.
 
It's very important to highlight the high-level goals and the progress upon them because often the city can be seen as monolithic and slow - but we're actually
making quite large strides in areas that are relatively new domains in the history of governance. But it's also important to really look hard
at our objectives and re-evaluate whether they are *truly* accomplishing what we want to accomplish.

An important discussion point is the difference between *openness* and *transparency*. They're often used synonymously - they're even interchanged
many times in the City's own strategic documentation. The problem, is I don't believe they are the same thing at all. Consider a museum: an exhibit
could potentially be showing some dinosaur fossils with printed dates behind a piece of glass. You can see everything, sure. It's transparent. But compare
that with a touchscreen that lets you explore different eras interactively. It lets you follow your favourite dinosaur - certainly the [Edmontosaurus](https://en.wikipedia.org/wiki/Edmontosaurus) - through its lifecycle
to its ultimate extinction. One is the viewable dictation of another person's perspective, the other is a unique exploration of what
matters to the user.

Let's come out of the abstract and talk about how the Open City initiative's goals don't match up with the technology and philosophies
of openness in the 21st century. We'll start by taking a trip over to Bulgaria where, about a month ago [amendments were passed requiring all 
government custom development to be open source](https://thepolicy.us/bulgaria-got-a-law-requiring-open-source-98bf626cf70a#.hkx302fgi).

This is an absolutely incredible change that is pushing the envelope. The US government is making [similar strides](https://www.whitehouse.gov/blog/2016/08/08/peoples-code), 
although slightly more conservative in their implementation. But what does this actually mean?

> In software, "source code" is the instructions a programmer writes to tell a computer what to do. Open source software makes
  source code freely available for inspection and modification by anyone in the world. 
  
Consider a baker. An open source baker
will bake you a cake with beautiful frosting, and provide you with the full recipe so you can make it yourself, or make a new icing design to modify the cake.
A closed-source baker will bring you a cake, and if you ever want another or if you want modifications to the cake, you have to pay the baker to provide it.
If a closed-source baker dies, you might never find someone who can bake a cake exactly the same. If a closed source baker puts sub-standard ingredients into
his cake, you'd never know it until you bite in. With the open source baker, you could have your friends who are experts in the kitchen inspect the recipe.

When a bridge has barriers double the size that the specification said they would, we can take out our measuring tape and
verify that. When a software system created by the city stores our passwords in plaintext, how could we ever know about
that huge deficiency until there was a data breach? There is currently no way for taxpayers to audit the software systems that
*we paid for*. But auditability isn't the only advantage of Open Source software.

A culture of Open Source leads to **massive cost savings**. The software problems our city faces are not unique. For example,
our 311 app - which we paid a contractor to provide a closed-source solution for - is an excellent example of something that
*should* be open sourced. Unlike some of our transit apps (which are [**atrocious**](http://www.cbc.ca/news/canada/edmonton/councillors-call-for-improvements-to-the-transit-app-1.3456390)),
the 311 app is generally lauded as "fine". It does the job. It's basically just filling out a form on your mobile phone,
though a very slow one. It's forgettable, and it's not a pleasure to use, but if a pothole is seriously inconveniencing me,
I'll open the app.

But consider for a moment, the alternative: what if the source code - the recipe for making the app - was freely available online?
What if Olds, with their [gigabit internet](http://o-net.ca/), wanted to have a 311 app but couldn't justify it because of the large
upfront cost vs their small town population? Well, they could benefit from our investment and get an app up and running at
essentially zero cost. Then when they make small improvements, those improvements would get filtered up into our app as well. When developers
like myself see problems or deficiencies - or really just something cool we want - in the app, then we'd add it. For free. Simple as that.

For the uninitiated, this is *not* an unreasonable thing to expect. Open Source software is pervasive, actively-developed, and everywhere.
Millions of developers every day are contributing their professional work to open source projects for free. The majority of **the entire internet**
runs on an operating system called Linux, which is completely free and Open Source. In fact, the city of Edmonton has a meetup group
called [BetaCityYEG](https://betacity.ca/) whose entire *purpose* is to use technology to make the city better, which is something they do
every month, for free.

Which do you think makes more fiscal sense, spending over $25,000 building apps that are [universally panned](http://www.cbc.ca/news/canada/edmonton/omar-mouallem-slams-new-ets-live-to-go-smart-bus-app-1.2873912) and
go completely un-updated since their release? Or, tapping in to a vibrant, professional community that is itching to just
make the city better, and wants to do it at no cost?

Suddenly, instead of every city paying $25,000-$50,000 per app they want to build, they could instead have a very small budget to configure
and deploy the Open Source application for their city. And whenever any city makes improvements, *every* city benefits. Technology needs are
only going to increase over the next decade, and Edmonton has the opportunity to be a leader in both the province and the country
implementing a strategy that will yield the single largest technology cost-savings in the entirety of the city's books.

The only thing holding us back a high level lack of knowledge and political will. That's it. The cost savings such a policy would represent are
innumerable. The only thing we have to lose is our reputation of choosing the most incompetent vendors to build our critical infrastructure.

We can continue to build our systems in proprietary silos just like it was still 1998. Or we can step up, recognize the massively
different technological landscape and jump off our Metro Line train driving at 30km/h straight to irrelevance. 

The choice is ours.
