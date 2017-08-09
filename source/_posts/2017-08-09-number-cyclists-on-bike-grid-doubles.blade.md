---
title: "After the downtown bike grid was installed, bicycle trips increased 92%"
date: "2017-08-09"
imgpath: "/img/posts/2017-08-09-number-cyclists-on-bike-grid-doubles/"
img: "102ave.jpg"
description: "Even with a still-under-construction grid, cycle traffic has already doubled"
tags: 
    - "vision-zero"
    - "cycling"
    - "bike-grid"
---

If you build it, they will come.

Early bicycle count data has just come in, when comparing a sunny, warm weekday at the end of May before the installation of the
downtown bike grid to the end of June, we can see an **increase in bicycle trips of 92%**. And this near-doubling of cyclists
has occurred with only a partially-completed grid.

<div class="center">
    <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/yegbikegrid?src=hash">#yegbikegrid</a> update this morning:<br>-105Ave to open by Aug 26<br>-Counts-May 31: 2454 (before network),June 30: 4711 (after)<a href="https://twitter.com/hashtag/yegdt?src=hash">#yegdt</a> <a href="https://twitter.com/hashtag/yegbiz?src=hash">#yegbiz</a> <a href="https://twitter.com/hashtag/yeg?src=hash">#yeg</a> <a href="https://t.co/GDG5d4p8qW">pic.twitter.com/GDG5d4p8qW</a></p>&mdash; DBA Edmonton (@DBAyeg) <a href="https://twitter.com/DBAyeg/status/893507904086491140">August 4, 2017</a></blockquote>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

This is not necessarily a surprising outcome. Around the world -- even just a few hundred kilometres south in Calgary -- the same phenomenon
is frequently observed.

> If you give people an option to safely and conveniently transport themselves with active modes, they usually will.

This is by no means the end-all-be-all of statistics. There are fifteen bicycle counters installed around the grid, and
more detailed statistics will be coming as data is gathered and the grid is completed (it's still under construction, remember).

While the protected bike grid seems like a massive, wide-impacting change -- certainly it's a stark departure from what
cyclists have gotten in the past -- it's important to realize just how few resources are actually being *dedicated* to people
who cycle.

Consider the case of 102 ave - a five-lane roadway that according to the [Open Data Catalogue](https://data.edmonton.ca/Transportation/Average-Annual-Weekday-Traffic-Volumes-2009-2014-M/9zk6-5p8r)
has only 40% the traffic volumes of Jasper Ave. Only a single lane of five was used for cycling infrastructure, leaving
the rest of the overbuilt road in place.

@include('_partials.image', [ 'name' => '102-ave.jpg', 'caption' => "The as-always illustrious photos provided by [@EdmondChuiHW](https://twitter.com/EdmondChuiHW/status/893882434726510592)" ])

We also shouldn't forget budgets. The $7.5MM for the downtown bike grid project is already miniscule in comparison to our
overall roadway budget (the Henday cost $4 billion, we've already committed to $1 billion worth of Yellowhead upgrades),
but did you know *over half* of the entire bike grid budget was dedicated to traffic signal improvements
for motorists? These new signalling systems give more [safety-enhancing protected phases](https://tpavlek.me/blog/2017-07-27-protected-left-turns/)
as well as use embedded sensors in the roadway to optimize traffic light timings for motorists.

<div class="center">
    <div class="card grey lighten-5 auto-margins" style="max-width: 45rem;">
        <div class="card-content">
        <span class="card-title center">Downtown Bike Grid Costs</span>
        <canvas id="spending-share"></canvas>
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById('spending-share').getContext('2d');
var chart = new Chart(ctx, {

    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ["Traffic Signals", "Paint Markings","Curbs, Bollards and Planters", "New Snow Clearing Equipment" ],
        datasets: [{
                data: [4225000, 341000, 2742000, 200000],
                backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ]
            }],
    },

    // Configuration options go here
    options: {
    }
});
</script>

It's past time our city was accessible and shared with everyone, not just those who choose to drive a motor vehicle. And now
we can see that the downtown bike grid is cheaply and efficiently enabling us to do just that.

<div class="center">
<blockquote class="twitter-tweet" data-conversation="none" data-lang="en"><p lang="en" dir="ltr">4:30PM Mon. <a href="https://twitter.com/hashtag/yegwalk?src=hash">#yegwalk</a>🚶<a href="https://twitter.com/hashtag/yegbike?src=hash">#yegbike</a>🚲<a href="https://twitter.com/hashtag/yegtraffic?src=hash">#yegtraffic</a>🚘 all move in their own space efficiently. Designing for everyone=better for everyone, including🚘 <a href="https://t.co/QUNEIAtqST">pic.twitter.com/QUNEIAtqST</a></p>&mdash; Edmond Chui (@EdmondChuiHW) <a href="https://twitter.com/EdmondChuiHW/status/893885731847917568">August 5, 2017</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
