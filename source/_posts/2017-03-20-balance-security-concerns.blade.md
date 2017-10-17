---
title: "Council security proposal would cause significant damage to democratic participation"
slug: "balance-security-concerns"
date: "2017-03-20"
imgpath: "/img/posts/2017-03-20-balance-security-concerns/"
img: "iveson-popo.jpg"
description: "Edmonton's own consultation shows that participation at City Hall could drop by up to 80% if the City proceeds with implementation of bag searches and metal detectors"
tags: 
    - "open-city"
    - "security"
    - "city-council"
---

*This is a continuation of my coverage on council's proposed security measures. You can view the last post [here](/blog/2017/02/16/keep-metal-detectors-bag-searches-out-of-city-hall/).*

I've written previously about the need to justify security measures before they're implemented, however my arguments
were mostly theoretical in nature. I believe it's important to do everything we can to protect our rights, and any erosion
should be clearly warranted.

However, since then administration has released [the results of their consultation](/pdf/2017-03-20-balance-security-concerns/insight-security-measures-consultation.pdf) via the Edmonton Insight Community,
and with that data we can easily draw conclusions.
 
> Adding bag searches, and metal detectors to City Hall will have a massive impact on democratic participation

The city's survey was completed by **2,067** people. In administration's summary, they state that "*only* 20% agreed they would be less likely to participate"
if they knew bag searches/metal detection was being performed. The only conclusion drawn from the report is that, therefore,
these changes will have minimal impact on participation.

However, I disagreed. In my comments to Executive Committee urging them not to proceed with these measures, I mentioned
that it was probable that those 20% of respondents could represent a significant proportion, or even a majority, of the people
who actually *do* participate at council meeting each year.

<div>
    <canvas id="participation-chart" style="max-width:100%" width=400 height=150></canvas>
</div>

<script>
var ctx = document.getElementById("participation-chart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [ "2014", "2015", "2016" ],
        datasets: [{
            label: 'Speakers at Council/Committee',
            data: [ 504, 575, 493],
            fill: false,
            backgroundColor: "rgba(211, 88, 82, 0.4)",
            borderColor: "rgba(216, 54, 54,1)"
        },
        {
            label: '20% of Survey Respondents',
            data: [413, 413, 413 ],
            backgroundColor: "rgba(2, 99, 39,0.4)",
            borderColor: "rgba(2, 99, 39,1)"
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

Using the data in the Open Data Catalogue, and a few pieces of custom software I wrote, I was able to extract the names of
all the people who spoke at Council and Committee each year. The *20% of respondents* that the city described with the pejorative
**only**, actually represent **80% of the total number of people who participate at City Council annually**. 2015 saw the highest participation
this council term, and still only had 575 individuals. The number of individuals who said this would negatively impact their participation
was 413.

While some councillors like Dave Loken and Mayor Iveson [state that](http://edmontonjournal.com/news/local-news/metal-detectors-bag-checks-only-the-first-security-upgrades-for-city-hall-officials)
the Corporate Security team are the experts and their judgement should be trusted on these matters, that's not the whole story.

The city's security team will only present [one side](http://edmontonjournal.com/news/politics/david-staples-councillors-get-one-sided-advice-on-city-hall-security-risks)
of the argument. It's not their job to protect our democratic processes. It's their job to increase security.

Likewise, it is the job of our city council to provide oversight to the city. Council needs to stop trying to pass the hot
potato of this issue back to administration, stand up, take leadership and **say no to security theatre.**


@include('_partials.image', [ 'name' => 'iveson-popo.jpg', 'caption' => "Bad boys, bad boys, watchu gonna do when Iverson comes for you?" ])

City Council will put the implementation of these measures to a vote at the Tuesday, March 21st City Council Meeting.
