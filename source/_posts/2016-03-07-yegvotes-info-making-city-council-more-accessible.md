---
title: "YEGvotes.info, Making Edmonton's City Council more accessible"
date: "2016-03-07"
imgpath: "/img/posts/2016-03-07-yegvotes-info-making-city-council-more-accessible/"
img: "new-yegvotes.png"
description: "YEGVotes.info has been updated for more usefulness and accessibility. The changes focus on making it more clear, at first glance, what matters"
tags:
    - software
    - "city-council"
---

It's been about four months since I [launched YEGVotes.info](https://www.reddit.com/r/Edmonton/comments/3s6ysz/yegvotesinfo_a_website_using_edmontons_open_data/), a
site to help track what councillors have been doing and make the Edmonton City Council voting records more accessible - I'm writing today
to details some improvements that have been made to the usability and information presentation on the site, hopefully increasing
the usefulness of the site to Edmontonians. We got a good amount of traffic during the Ward 12 By-Election, culminating in an impressive
election-day peak

<div style="text-align:center;">
<img src="/img/posts/2016-03-07-yegvotes-info-making-city-council-more-accessible/analytics.png" />
</div>

but now I'm looking to make the site more useful for every-day, peacetime use.

For those unfamiliar, [YEGVotes.info](https://yegvotes.info/about) pulls records about Edmonton City Council from the [Open Data Catalogue](https://data.edmonton.ca/)
in order to make the happenings more easy-to-process and more useful. It tracks **Councillor attendance at meetings**

<div style="text-align:center; margin: 0 auto;">
<iframe src="https://yegvotes.info/embed/about/attendance" width="600" height="580"></iframe>
</div>

as well as tracking the **Councillor voting records** on any particular item in a way that's easily-viewable at-a-glance.

<div style="text-align:center; margin: 0 auto;">
<iframe src="https://yegvotes.info/embed/agenda_item/52649" width="100%" height="580"></iframe>
</div>

However, most of these features existed on the initial release. This past Saturday during the [#opendataday hackathon at EPL](http://www.epl.ca/odd/)
I worked on making the site more usable for the every-day citizen, who may not have a tonne of knowledge of what is going on
in city council. I had three primary objectives to complete during the hackathon, which were:

* Remove as much of the cruft as possible. People don't care that Council voted to adopt the minutes, or to open the public hearing.
* De-emphasize unanimous, procedural and no-debate votes.
* Avoid removing information that may be useful to someone.

The third is what made the problem hard - how can one simplify information and streamline the page without removing
information about certain topics that a person may specifically come to the page for? I tackled it a few ways. I'll describe
some of the things I did below, and follow it up with a screenshot - or you can just view all the changes now, live on [YEGVotes.info](https://yegvotes.info)!

### A simple blacklist to remove uninteresting items

City Council has a lot of uninteresting procedural junk that occurs during meetings. Fortunately, this is quite *consistent* 
uninteresting procedural junk. When talking with a some hackers present at the hackathon the suggestion was, as one would expect
from a room full of hackers, to use computer learning and train an AI to remove uninteresting motions. The actual implementation
was far simpler: I added about 30 items to a blacklist, and agenda items with those titles will not be displayed. A couple of those are
`NOTICES OF MOTION AND MOTIONS WITHOUT CUSTOMARY NOTICE` and `CALL TO ORDER AND RELATED BUSINESS`.

### Bring Councillor Inquiries to the Top

When I was presenting [YEGVotes.info](https://yegvotes.info) to the [Beta City YEG](http://betacity.ca/) meetup it just-so-happened
that Councillor McKeen was present, and he gave some pretty invaluable insight from both his time as a journalist and a councillor.
Generally, if you want to track how a particular councillor is doing, you want to be looking at the Councillor Inquiries and their
responses. Most of the stuff that comes up in a City Council meeting are items that administration has proposed, or bylaws that are not
working or capital project management; things that require *reaction* from Council. Inquiries, however, are *proactive* actions
by a particular Councillor showing what they believe in and will go out of their way to put on the table.

Unfortunately, the Open Data catalogue currently doesn't get the body of Councillor inquiries, nor is it possible to differentiate
between inquiries and protocol items at the moment, but the appropriate requests are in, and the framework exists on my side as soon
as the Open Data is ready

### De-Emphasize, but don't hide, unanimous decisions

Council tends to agree a lot. Previously, the front page was covered with a bunch of green checkmarks signalling unanimous decisions by Council.
When you think about it, that's vastly unhelpful. The word "Unanimous" communicates the exact same concept as six large checkmarks
denoting motion results, except trimming it down to just a single word uses a tenth of the visual space. It's useful to know
what items passed in a particular Council meeting, so I didn't want to remove all those items, but de-emphasizing the votes
added clarity and emphasis to what matters more to the people visiting, **disagreements**.

### Move contention to the forefront

By slimming the profile of unanimous actions without changing anything the contentious decisions get emphasis for free. And that's the
result of the redesign - the few items that have significant debate and disagreement on the floor end up being immediately what your attention
is drawn to. This coupled with the breakdown of the items covered by Council into categories allow for a quick assessment of the big
topics of each meeting.

<div style="text-align:center;">
<img src="/img/posts/2016-03-07-yegvotes-info-making-city-council-more-accessible/new-yegvotes.png" />
</div>

What are your thoughts? Do these improvements help? What would you like to see next on the site to make it useful to you?
Feel free to reach out via email: <a href="mailto:troy@tpavlek.me">troy@tpavlek.me</a> or on Twitter [@troypavlek]({{ $page->twitter_url }}).

As well, if you're interested, I've been doing a local podcast focusing on municipal politics called [Basket of YEGs](https://basketofyegs.com)!
In the most recent episode, I [sat down with Irfan Chaudhry to recap and get a behind-the-scenes look at his Ward 12 Campaign](http://basketofyegs.com/episode/2016/03/02/irfan-chaudhry-campaign-and-future-plans/).
