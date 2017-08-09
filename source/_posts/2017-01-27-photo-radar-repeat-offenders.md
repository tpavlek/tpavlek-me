---
title: "How many photo radar tickets are issued to repeat offenders?"
date: "2017-01-27"
imgpath: "/img/posts/2017-01-27-photo-radar-repeat-offenders/"
img: "photo-radar-letter.jpg"
description: "While there are enough photo radar tickets issued to unique license plates to give one to 30% of Metro Edmonton residents, 30% of all tickets are issued to plates that receive 3 or more per year."
tags: 
    - "photo-radar"
    - "open-data"
---

> Is the Photo Radar program effective at reducing speeds?

This is the question that plagues most discussions about transportation and traffic safety in the City of Edmonton. While
this post won't give a conclusive answer to that question, I hope it provides another set of data with which we can
approach discussions.

If you're interested in checking out my series of stats on the photo radar program (which [I believe needs reform](/photo-radar-reform)) you can check
out the [2016 stats](/blog/2017/01/05/edmonton-photo-radar-statisitics-for-2016/), or the [2015 stats](/blog/2016/01/25/edmonton-photo-radar-2015-stats/)

The entire purpose of enforcement is to "teach a lesson" to those that break the law. If people are not learning, then
the enforcement strategy needs improvement, or you need to find a different avenue to teach.

I think a solid indicator in the question of whether or not citizens are learning is through looking at **repeat offenders**, those
who have received an enforcement action, yet continue to violate the law.

| # of Tickets Per Plate             | 2013                    | 2014                    | 2015                        | 2016                    |
|------------------------------------|-------------------------|-------------------------|-----------------------------|-------------------------|
| 1                                  | 189,816                 | 223,898                 | 226,655                     | 234,154                 |
| 2                                  | 44,332                  | 62,464                  | 60,848                      | 63,172                  |
| 3                                  | 13,899                  | 22,888                  | 21,260                      | 22,034                  |
| 4                                  | 5,086                   | 9,329                   | 8,631                       | 9,228                   |
| 5                                  | 2,173                   | 4,480                   | 3,807                       | 4,213                   |
| 6+                                 | 2,149                   | 5,229                   | 4,347                       | 5,031                   |
| **Total Plates** (total tickets)   | **257,455** (422,720)   | **328,288** (509,990)   | **325,548** (498,227)       | **337,832** (519,177)   |

The first thing that jumps out about this data is that yes, definitely a lot of unique license plates are being issued photo radar tickets.
However, we also need to take into account that it's not just Edmontonians driving on our streets, we have to include the Metro Edmonton area
as many bedroom communities commute into Edmonton. We also have a pretty slow-going portion of the *Trans-Canada Highway* running through
our city, and the flashing ticket machine might be distributing speed notifications to impatient road-trippers. 

For argument's sake, we'll use the population of Metro Edmonton (around 1.1 million) as our baseline. That means that **roughly
30% of the Metro Edmonton population will receive at least one photo radar ticket per year**.

Where the data starts to get interesting is when we break down not only by individuals but by the _share_ of total tickets each group received.

<div>
    <canvas id="ticket-chart" style="max-width:100%" width=400 height=300></canvas>
</div>


<script>
var ctx = document.getElementById("ticket-chart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2013", "2014", "2015", "2016" ],
        datasets: [{
            label: '1 ticket received',
            data: [189816, 223898, 226655, 234154],
            fill: false,
            backgroundColor: "rgba(219, 194, 96,0.4)",
            borderColor: "rgba(219, 194, 96,1)"
        },
        {
            label: '2 tickets received',
            data: [88664, 124928, 121696, 126344],
            fill: false,
            backgroundColor: "rgba(240, 224, 115,0.4)",
            borderColor: "rgba(240, 224, 115,1)"
        },
        {
            label: '3 tickets received',
            data: [ 41697, 68664, 63780, 66102],
            fill: false,
            backgroundColor: "rgba(237, 115, 46,0.4)",
            borderColor: "rgba(237, 115, 46,1)"
        },
        {
            label: '4 tickets received',
            data: [ 20344, 37316, 34534, 36912],
            fill: false,
            backgroundColor: "rgba(237, 103, 23,0.4)",
            borderColor: "rgba(237, 103, 23,1)"
        },
        {
            label: '5 tickets received',
            data: [ 10865, 22400, 19035, 21065],
            fill: false,
            backgroundColor: "rgba(237, 92, 30,0.4)",
            borderColor: "rgba(237, 92, 30,1)"
        },
        {
            label: '6+ tickets received',
            data: [ 71334, 32784, 32537, 34600],
            fill: false,
            backgroundColor: "rgba(188, 11, 11, 0.4)",
            borderColor: "rgba(188, 11, 11, 1)"
        }]
    },
    options: {
        scales: {
            yAxes: [{
                stacked: true
            }],
            xAxes: [{
                stacked: true
            }]
        }
    }
});
</script>

30% is starting to become an interesting number in the context of photo radar.

> Since 2014, 30% of all photo radar tickets issued have been to drivers that received 3 or more tickets per year.

Looking at the data available here, a reasonable argument can be made that the automated enforcement program is not working
as a tool for eliminating speeding overall. Every year sees a large segment of offenders that receive close to a ticket or more per quarter.
And if the people who received just 1 ticket stopped speeding completely, well... we would have run out of population that hadn't received
a ticket in early 2016.

However, an argument could be made the current program _is_ effective at lowering speeds in a particular _location_. As
[Global News reported](http://globalnews.ca/news/3192350/top-spots-in-edmonton-where-youll-get-a-photo-radar-ticket/), from 2014 to 2016
segments of Whyte avenue where photo radar was deployed have seen a dramatic (around 70%) drop in the tickets issued. However,
administration is acknowledging that the simple addition of a **50km/h sign** to the affected locations would have a positive effect on compliance.

The question of whether the photo radar program is effective at reducing speeds still doesn't have a _conclusive_ answer, but one thing
I believe quite strongly is that the program is not _nearly effective enough_ to justify is continuation without reform.

I believe that a [series of simple reforms](/photo-radar-reform) will allow photo radar to become a useful stopgap tool that we
can use on the path to [eliminating traffic injuries completely](/vision-zero). If you agree, please reach out and join
my campaign for City Council in Ward 11, and let's make the photo radar program actually _work_ for us.
