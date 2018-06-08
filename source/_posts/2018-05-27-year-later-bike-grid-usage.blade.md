---
title: "A year later: Numbers show high usage of Downtown Bike Grid"
slug: "year-later-downtown-bike-grid"
date: "2018-05-27"
imgpath: "/img/posts/2018-05-27-year-later-bike-grid-usage/"
img: "rush-hour.jpg"
description: "No, it wasn't just Canada Day anomalies. Surprisingly, if you make something pleasant and safe, more people will do it."
tags: 
    - "vision-zero"
    - "cycling"
    - "bike-grid"
photo_credit:
    name: "@Daveography"
    link: "https://twitter.com/Daveography/status/996522491035054080"
---

Last year after the bike grid opened - only partially - we saw a 92% increase in cyclists (measured on June 30)

@include('_partials.posts.post-embed', [ 'slug' => 'number-cyclists-on-bike-grid-doubles' ])

Many Reddit users bemoaned that the city allegedly cherry-picked the days to measure, and that Canada Day inflated the usage.

Granted, Canada Day was last year's peak (though the number taken was the day before, June 30th). But, as we're going to explore
in this post, grid usage is doing phenomenally overall and is only increasing. This year's Canada Day peak is going to blow off
the roof.

And it's not all just about Canada Day. The "before" measurement we've used historically: a sunny wednesday on May 31, 2017
can be pretty easily compared with May 2, 2018, a sunny Wednesday in May. Usage on the latter was measured at **4,449 an 81% increase**.

<div class="text-center">
    @include('_partials.youtube', [ 'video_id' => 'EVkgvdO5Dtc' ])
</div>

The bike grid experienced its _partial_ opening (essentially just 100ave with feeders on 103 and 107 streets) on June 16, 2017.

With that in mind, let's see how usage stacks up over the past year.

<canvas id="bike-grid-usage"></canvas>

<script>
Chart.pluginService.register({
    beforeDraw: function (chart, easing) {
        if (chart.config.options.chartArea && chart.config.options.chartArea.backgroundColor) {
            var helpers = Chart.helpers;
            var ctx = chart.chart.ctx;
            var chartArea = chart.chartArea;

            ctx.save();
            
            var columnCount = chart.data.datasets[0].data.length;
            var width = chartArea.right - chartArea.left;
            var columnWidth = width/columnCount;
            var height = chartArea.bottom - chartArea.top;
            
            ctx.fillStyle="rgb(255, 158, 158)";
            ctx.fillRect(chartArea.left, chartArea.top, 1.5 * columnWidth, height);
            
            ctx.fillStyle = 'lightblue';
            ctx.fillRect(chartArea.left + (16 * columnWidth), chartArea.top, 9 * columnWidth, height);
            
            ctx.restore();
        }
    }
});

new Chart(document.getElementById("bike-grid-usage"), {
    type: 'line',
    data: {
        labels: [
            "May 31", 
            "Jun 14", 
            "Jun 24", 
            "Jun 30", 
            "Jul 1", 
            "Jul 14", 
            "Jul 15",
            "Jul 22",
            "Jul 28",
            "Jul 29",
            "Aug 7",
            "Aug 8",
            "Aug 23",
            "Sep 5",
            "Sep 20",
            "Oct 4",
            "Nov 7",
            "Nov 21",
            "Dec 5",
            "Dec 19",
            "Jan 3",
            "Jan 18",
            "Feb 9",
            "Feb 21",
            "Mar 7",
            "Mar 20",
            "Apr 4",
            "Apr 18",
            "May 2"
            ],
        datasets: [{
            label: 'Cyclists on Downtown Grid',
            data: [2454,
                   1307,
                   2796,
                   4711,
                   5547,
                   3731,
                   3290,
                   3179,
                   4188,
                   2916,
                   1054,
                   3479,
                   4102,
                   4437,
                   1171,
                   3124,
                   1154,
                   673,
                   1287,
                   1227,
                   1009,
                   1172,
                   627,
                   657,
                   959,
                   1304,
                   1158,
                   2118,
                   4449],
            fill: false,
            backgroundColor: "rgba(117, 201, 76,0.4)",
            borderColor: "rgba(117, 201, 76,1)"
        }]
    },
    options: {
        scale: {
            pointLabels: {
                callback: function(label) { return label; },
                fontColor: 'ff0000'
            }
        },
        chartArea: {
            backgroundColor: 'rgba(251, 85, 85, 0.4)'
        }
    }
});
</script>

<div class="text-sm italic">
    <strong>Note:</strong> This data is for the downtown grid only and does not include
    102 ave west of 109st (the Oliverbahn) or any of 83rd Ave (Garneauing Fast).
</div>

The <span class="font-bold" style="color:rgb(255, 158, 158)">red area</span> contains the two data points <em>before</em> the
June 16th partial opening date. 

The opened period can be divided into two general components: summer and <span class="font-bold" style="color:lightblue;">winter</span>.
We don't have spring in Edmonton.

The median <span class="font-bold" style="color:lightblue;">winter</span> cyclist count was <strong>1009</strong>, as compared to the median
summer count of <strong>3235</strong>. Many advocates set a "target" winter-cycling rate of one-quarter the summer numbers. That is what I would have considered a
"success". This past year, we've exceeded those expectations according to this data.

On an interesting note, there's a sharp drop to 1,054 cyclists on August 7th, that had recovered the very next day
to 3,479 cyclists. August 7th is a particularly interesting phenomenon to note because it was the last day of *Heritage Days*. We
all know how jam-packed Heritage Days can get, so cyclists are not _staying home_ but rather this again shows the mass movement of
our city to Hawrelak Park every year.

September 20th is another piece of anomaly data. From the 19th to the 21st Edmonton got 30.4mm of rain, in addition to the
weather falling down to around 3 degrees. I personally prefer biking in a blizzard to biking the chilly rain, so I'm comfortable
with that as an explanation. Weather is the weather though, and rain is part of summer so of course these low data points are
included in the median calculation.

> Overall in the past year we've seen a 72% increase in the median number of downtown summer cyclists

<div class="text-center mx-auto">
    <div class="inline-block">
        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Ten. Ten people on bikes waiting for the light. Ah-ha-ha <a href="https://twitter.com/hashtag/thecount?src=hash&amp;ref_src=twsrc%5Etfw">#thecount</a>  <a href="https://twitter.com/hashtag/yegbike?src=hash&amp;ref_src=twsrc%5Etfw">#yegbike</a> <a href="https://t.co/xujJexroij">pic.twitter.com/xujJexroij</a></p>&mdash; Daniel Vriend (@dharmanv) <a href="https://twitter.com/dharmanv/status/989513192551337986?ref_src=twsrc%5Etfw">April 26, 2018</a></blockquote>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>

Every cyclist on the downtown bike grid is one less potential car driver being traffic. 

It's one more person that's statistically more likely to stop, mingle, and make purchases at local businesses on their route. It's 
one more person commuting on infrastructure that costs society _much_ less than a personal vehicle. It's one more person lowering
their risk of diabetes, obesity and strokes saving us all health care costs.

It's one more person that will probably write a pretentious post extolling the virtues of a minimum cycling grid and its advantages
and post it on [reddit](https://www.reddit.com/r/Edmonton/comments/8mj0vf/a_year_later_numbers_show_high_usage_of_downtown/).

Hi, I'm Troy.
