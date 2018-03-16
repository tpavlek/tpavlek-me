---
extends: "_layouts.wrapped"
section: "content"
title: "Edmonton Photo Radar - The Stats"
imgpath: "/img/posts/2017-08-15-open-photo-radar-locations-audit/"
img: "spider-photo.jpg"
description: "All the stats about Edmonton's Photo Radar program -- updated March, 2018"
---

@section('title', $page->title)

@component('_partials.posts.post-body', [ 'title' => 'Edmonton Photo Radar: The Stats', 'img' => $page->imgpath . $page->img, 'date' => '2018-03-15' ])
    
There is frequently much ado in Edmonton about the photo radar program. Advocates tend to laud it's international reputation 
for lowering speeds. Car commuters posting on reddit -- and David Staples -- tend to call it a cash cow.

But, frequently, these discussions are devoid of facts and data. Since 2015, I have made annual FOIP requests to the program
and I publish them here, to help fight against that. Let's jump right in and explore the data updated as of **March, 2018**.
    
| km/h Over | 2011         | 2012           | 2013        | 2014        | 2015          | 2016         | 2017        |
|-----------|--------------|----------------|-------------|-------------|---------------|--------------|-------------|
| 1-5       | -            | -              | -           | -           | -             | -            | -           |
| 6-10      | 2,462        | 3,252          | 12,403      | 66,847      | 59,544        | 63,226       | 46,155      |
| 11-15     | 38,222       | 42,868         | 109,096     | 214,474     | 217,648       | 254,292      | 224,716     |
| 16-20     | 76,689       | 85,027         | 203,721     | 159,920     | 152,264       | 143,816      | 132,179     |
| 21+       | 29,981       | 31,849         | 97,500      | 68,749      | 68,779        | 61,446       | 55,458      |
| **Total** | **147,354**  | **162,996**    | **422,720** | **509,990** | **498,235**   | **522,780**  | **458,508** |
    
First looking at the raw number of tickets, this allows us to answer a couple questions about the Photo Radar Program:

> Does photo radar ticket for lower speeds than it used to?

Edmonton's photo radar program has never, and continues to never ticket for 1-5 km/h over the speed limit. That person complaining
about getting a ticket for 3 over on the Henday is lying, and was probably driving closer to 20 over.

That said, the answer to the question is **yes, the program does seem to be trending toward issuing lower-speed tickets**. From 2014 on, 
the percentage of tickets issued for 6-10 over jumped by around *300%* and appears to be holding at that rate. The number of tickets issued 
for 11-15 over jumped **62%**, showing an overall trend of moving photo radar to lower-speed locations, or lowering the threshold 
for which tickets are typically issued.

2014 was also the year that Edmonton added school zones, and committed to 30% of its photo radar resources to dedicated
school zone enforcement.

<canvas id="ticket-share-infraction-category"></canvas>

> Does Edmonton issue more photo radar tickets now?

Yep. In 2007, a third-party contractor ran the photo radar program, with EPS providing oversight. In 2012, the City took
ownership of the program, and begin issuing and sending out tickets without a third-party vendor. An [audit committee report](https://tpavlek.me/pdf/2016-01-25-edmonton-photo-radar-2015-stats/audit-review.pdf)
revealed that by 2012, the project to transition photo radar operations to the City was **$47MM over budget**. There
was no impact to the tax levy, however, because the shortfall was made up with additional ticket revenue.

This correlates with the 160% increase in tickets issued in 2013. Whether this increase was designed to make up the shortfall
or there city was simply more efficient at issuing tickets than the third-party contractor is subject to some debate.       

> Does Edmonton set up photo radar mostly on the Henday?

**Nope**. When breaking the numbers down by total enforcement hours, the Henday is only **11%** of the enforcement resources.

In fact, the Henday, Yellowhead and Whitemud *combined* only equate to **21%** of the enforcement hours of the program.

<canvas id="enforcement-share" style="height:400px"></canvas>

This case seems to hold in both the macro, and micro level. When I did a spot check in mid-2017, I found that more enforcement happens
in school and playground zones than happens on all our city highways combined.

@include('_partials.posts.post-embed', [ 'slug' => "photo-radar-locations-audit" ])

The top 5 spots for photo radar enforcement in 2017 were:

| Location                            | Enforcement     |
|-------------------------------------|-----------------|
| 83 St between Whyte Ave - 86 Ave    | 1,036 hours     |
| Stony Plain Rd between 178 - 182 St | 1,023 hours     |
| Anthony Henday Dr. @ Ray Gibbon Dr  | 1,002 hours     |
| Anthony Henday Dr at 97 St          | 993   hours     |
| 82 Ave between 89 - 87 St           | 973   hours     |

*If you'd like to see the full breakdown of every location and the time deployed there, I've made a CSV available [here](/pdf/2017-photo-radar-deployment-numbers.csv).*

> Has the number of tickets changed in 2017?

Incrementally. There was about 65,000 less tickets issued in 2017 as compared to 2016. The number of photo radar tickets issued is the lowest it has been since
2013, when the effects of the city takeover were becoming apparent, causing revenue to be down [$3MM under what was expected](http://www.cbc.ca/news/canada/edmonton/photo-radar-revenue-traffic-safety-1.4286320).
The other stats have remained relatively consistent.

One interesting change in 2017 is that the share of tickets issued for 6-10km/h over actually _decreased_ 2 percentage points.
While raw ticket numbers are down across the board, it very peculiar to see the share of those lower-speed tickets decrease.
2017 was the year that saw Jr. High School zones and playground zones have wide implementation across the city. One would have
expected this large increase in lower-speed zones be reflected in a larger share of lower-speed tickets.

That will be something to watch for in 2018, after the playground zone implementation is entirely complete.

@endcomponent

@component('_partials.posts.post-body', [ 'title' => 'How many photo radar tickets are issued to repeat offenders?', 'img' => '/img/posts/2017-01-27-photo-radar-repeat-offenders/photo-radar-letter.jpg', 'date' => '2018-03-15' ])

The fundamental goal of the photo radar program is (should be) to reduce speeding. Since the strategy is stick-based (as opposed to carrot-based)
in order for the program to be effective someone has to receive a ticket and then change their behaviour. One vector for assessing
this is to look at repeat offenders in the photo radar program.

If a particular driver is consistently receiving a large number of repeat tickets, it's unlikely their behaviour is changing.

| # of Tickets Per Plate             | 2013                    | 2014                    | 2015                        | 2016                    | 2017
|------------------------------------|-------------------------|-------------------------|-----------------------------|-------------------------|----------
| 1                                  | 189,816                 | 223,898                 | 226,655                     | 234,154                 | 221,125
| 2                                  | 44,332                  | 62,464                  | 60,848                      | 63,172                  | 55,308
| 3                                  | 13,899                  | 22,888                  | 21,260                      | 22,034                  | 18,698
| 4                                  | 5,086                   | 9,329                   | 8,631                       | 9,228                   | 7,383
| 5                                  | 2,173                   | 4,480                   | 3,807                       | 4,213                   | 3,206
| 6+                                 | 2,149                   | 5,229                   | 4,347                       | 5,031                   | 3,361
| **Total Plates** (total tickets)   | **257,455** (422,720)   | **328,288** (509,990)   | **325,548** (498,227)       | **337,832** (519,177)   | **309,081** (458,508)

The first thing that jumps out about this data is that yes, definitely a lot of unique license plates are being issued 
photo radar tickets. However, we also need to take into account that it's not just Edmontonians driving on our streets, 
we have to include the Metro Edmonton area as many bedroom communities commute into Edmonton. We also have a pretty 
slow-going portion of the Trans-Canada Highway running through our city, and the flashing ticket machine might be distributing 
speed notifications to impatient road-trippers.

For argument's sake, we'll use the population of Metro Edmonton (around 1.1 million) as our baseline. That means that 
roughly 30% of the Metro Edmonton population will receive at least one photo radar ticket per year.

Where the data starts to get interesting is when we break down not only by individuals but by the share of total tickets each group received.

<canvas id="repeat-offenders-grouping"></canvas>

> Since 2014, 30% of all photo radar tickets issued have been to drivers that received 3 or more tickets per year.

From this data, we can see that the photo radar program alone is not enough to stop speeders entirely, forever.
Every year sees a large segment of offenders that receive close to a ticket or more per quarter.
And if the people who received just 1 ticket stopped speeding completely, well... we would have run out of population that hadn't received
a ticket in early 2016.

However, an argument could be made the current program _is_ effective at lowering speeds in a particular _location_. As
[Global News reported](http://globalnews.ca/news/3192350/top-spots-in-edmonton-where-youll-get-a-photo-radar-ticket/), from 2014 to 2016
segments of Whyte avenue where photo radar was deployed have seen a dramatic (around 70%) drop in the tickets issued. City
administration is acknowledging that the simple addition of a **50km/h sign** to the affected locations would have a positive effect on compliance.

And that's it!

If you have any questions about this data feel free to reach out on [Twitter](https://twitter.com/troypavlek) (and follow me there to 
give me social validation and worth) or [email](mailto:troy@tpavlek.me). This page is occasionally updated with new data and
better insights.

@endcomponent

<script>
new Chart(document.getElementById("ticket-share-infraction-category"), {
    type: 'line',
    data: {
        labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017" ],
        datasets: [{
            label: '6-10 over (% issued)',
            data: [1.5, 2, 3, 13, 12, 12, 10],
            fill: false,
            backgroundColor: "rgba(117, 201, 76,0.4)",
            borderColor: "rgba(117, 201, 76,1)"
        },
        {
            label: '11-15 over (% issued)',
            data: [ 26, 26, 26, 42, 44, 49, 49],
            fill: false,
            backgroundColor: "rgba(41, 86, 19,0.4)",
            borderColor: "rgba(41, 86, 19,1)"
        },
        {
            label: '16-20 over (% issued)',
            data: [ 52, 52, 48, 31, 31, 28, 29],
            fill: false,
            backgroundColor: "rgba(226, 77, 72,0.4)",
            borderColor: "rgba(226, 77, 72,1)"
        },
        {
            label: '21+ over (% issued)',
            data: [ 20, 20, 23, 13, 14, 12, 12],
            fill: false,
            backgroundColor: "rgba(186, 15, 9,0.4)",
            borderColor: "rgba(186, 15, 9,1)"
        },
        ]
    },
    options: {
        scale: {
            pointLabels: {
                callback: function(label) { return label + "%"; },
                fontColor: 'ff0000'
            }
        }
    }
});

new Chart(document.getElementById("repeat-offenders-grouping"), {
    type: 'bar',
    data: {
        labels: ["2013", "2014", "2015", "2016", "2017" ],
        datasets: [{
            label: '1 ticket received',
            data: [189816, 223898, 226655, 234154, 221125],
            fill: false,
            backgroundColor: "rgba(219, 194, 96,0.4)",
            borderColor: "rgba(219, 194, 96,1)"
        },
        {
            label: '2 tickets received',
            data: [88664, 124928, 121696, 126344, 110616],
            fill: false,
            backgroundColor: "rgba(240, 224, 115,0.4)",
            borderColor: "rgba(240, 224, 115,1)"
        },
        {
            label: '3 tickets received',
            data: [ 41697, 68664, 63780, 66102, 56094],
            fill: false,
            backgroundColor: "rgba(237, 115, 46,0.4)",
            borderColor: "rgba(237, 115, 46,1)"
        },
        {
            label: '4 tickets received',
            data: [ 20344, 37316, 34534, 36912, 29532],
            fill: false,
            backgroundColor: "rgba(237, 103, 23,0.4)",
            borderColor: "rgba(237, 103, 23,1)"
        },
        {
            label: '5 tickets received',
            data: [ 10865, 22400, 19035, 21065, 16030],
            fill: false,
            backgroundColor: "rgba(237, 92, 30,0.4)",
            borderColor: "rgba(237, 92, 30,1)"
        },
        {
            label: '6+ tickets received',
            data: [ 71334, 32784, 32537, 34600, 20166],
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

new Chart(document.getElementById('enforcement-share'), {

    type: 'pie',

    // The data for our dataset
    data: {
        labels: ["Anthony Henday", "Whitemud", "Yellowhead", "Whyte Ave", "Stony Plain Road", "Other Streets"],
        datasets: [{
                data: [343310, 110941, 184489, 176963, 116816, 2165637],
                backgroundColor: [
                    'rgb(173, 22, 5)',
                    'rgb(173, 77, 5)',
                    'rgb(173, 119, 5)',
                    'rgb(109, 160, 242)',
                    'rgb(40, 107, 214)',
                ]
            }],
    },

    // Configuration options go here
    options: {
        tooltips: {
          callbacks: {
            label: function(tooltipItem, data) {
              //get the concerned dataset
              var dataset = data.datasets[tooltipItem.datasetIndex];
              //calculate the total of this data set
              var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                return previousValue + currentValue;
              });
              //get the current items value
              var currentValue = dataset.data[tooltipItem.index];
              //calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
              var precentage = Math.floor(((currentValue/total) * 100)+0.5);
        
              return Number(Math.round(currentValue / 60)).toLocaleString() + " hours (" + precentage + "%)";
            }
          }
    } 
    

    }
});

</script>
