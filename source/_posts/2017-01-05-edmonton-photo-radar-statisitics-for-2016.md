---
title: "Edmonton Photo Radar Statistics for 2016"
date: "2017-01-05"
imgpath: "/img/posts/2017-01-05-edmonton-photo-radar-stats-2016/"
img: "truck-in-front-of-speedboard.jpg"
description: "In 2016 a a total of 297,145 photo radar tickets were issued to Edmontonians. Troy Pavlek breaks down the infractions, and budgetary implications."
slug: "photo-radar-stats-2016"
tags: 
    - "photo-radar"
    - "open-data"
---

*This is an annual update of the [statistics I posted at the end of 2015](/blog/2016/01/25/edmonton-photo-radar-2015-stats/)*.

As is rather typical in conversations with Edmontonians, I am frequently asked about the photo radar program, and my thoughts
on it. I like to speak from a place of knowledge and facts. Since data about the photo radar program is not in our
open data catalogue, I make a point of making a request for information annually, and share that data with everyone
in as public a form as possible. Keep an eye out over the next couple of weeks as more information will be coming out - 
if you want to hear about it
you can subscribe on [Facebook]({{ $page->facebook_url }}), [Twitter]({{ $page->twitter_url }}), or [Email](/subscribe/).

For now, let's look at the number of tickets issued this year.

| Amount Over Speed Limit | 2014          | 2015          | 2016 (through end of Nov)   |
|-------------------------|---------------|---------------|-----------------------------|
| 1-5                     | -             | -             | -                           |
| 6-10                    | 66,847 (13%)  | 59,544 (12%)  | 59,925 (12%)                |
| 11-15                   | 214,474 (42%) | 217,646 (44%) | 241,329 (49%)               |
| 16-20                   | 159,920 (31%) | 152,264 (31%) | 137,064 (28%)               |
| 21-50                   | 68,373 (13%)  | 68,396 (14%)  | 58,572 (12%)                |
| 51-100                  | 365           | 376           | 252                         |
| 100+                    | 1             | 1             | 3                           |
| **Total**               | **509,980**   | **498,227**   | **497,145**                 |

In 2014 we saw a huge jump (about 300%) in tickets issued for 6-10 over. This likely correlated with the beginning of school zone enforcement
(I should have more data on that soon, look out for that!)

However, we're now seeing a stabilization of tickets for 6-10 over, but the distribution of tickets is trending closer to the centre.
Less tickets are issued for higher violation speeds. There has been a consistent increase in tickets issued for 11-15 over, which is charted below.

<div>
    <canvas id="ticket-chart" style="max-width:100%" width=400 height=300></canvas>
</div>

<script>
var ctx = document.getElementById("ticket-chart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["2011", "2012", "2013", "2014", "2015", "2016" ],
        datasets: [{
            label: '6-10 over (% issued)',
            data: [1.5, 2, 3, 13, 12, 12],
            fill: false,
            backgroundColor: "rgba(242,139,29,0.4)",
            borderColor: "rgba(242,139,29,1)"
        },
        {
            label: '11-15 over (% issued)',
            data: [ 26, 26, 26, 42, 44, 49 ],
            fill: false,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)"
        }]
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
</script>

As a reminder, since we have a three-year budgeting process in Edmonton, we know where the expected
revenues from photo radar are supposed to go.

<div>
    <canvas id="revenue-chart" style="max-height:500px;max-width:500px;margin:0 auto;" width=400 height=400></canvas>
</div>

<script>
var ctx = document.getElementById("revenue-chart");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Edmonton Police Service", "Photo Radar Operations", "Traffic Safety Initiatives", "Traffic Safety Capital", "Community Partner Capital Grant", "Photo Radar Reserve" ],
        datasets: [{
            label: '$ transferred (in millions)',
            data: [20.4, 12.1, 4.4, 6.3, 2.9, 8.9],
            fill: false,
            backgroundColor: [
                            "#FF6384",
                            "#36A2EB",
                            "#FFCE56",
                            "#f49e42",
                            "#277c2a",
                            "#7f42a3"
                        ]
        }]
    },
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
        
              return " " + currentValue + "MM (" + precentage + "%)";
            }
          }
        } 
    }
});
</script>

Particularly interesting to me is that all told, **traffic safety initiatives and capital investment only use about 19% of the total photo
radar revenue**.

There's still not enough data widely available to really make great claims one way or another about the efficacy of
our photo radar program for increasing safety - stay tuned in the next couple weeks as I gather and release more detailed
data.

But there's one thing I know for certain. If the city has accepted [Vision Zero](/vision-zero) as our traffic safety program,
we absolutely need to be spending more than 20% of speeding ticket revenues on the infrastructure and design changes required
to make our roads safer, permanently.
