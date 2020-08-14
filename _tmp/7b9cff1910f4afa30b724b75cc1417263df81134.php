---
title: "How accurate is Edmonton's posted list of photo radar locations?"
slug: "photo-radar-locations-audit"
date: "2017-08-15"
imgpath: "/img/posts/2017-08-15-open-photo-radar-locations-audit/"
img: "spider-photo.jpg"
description: "Actual enforcement differed 41 times from the posted list during the week, but also revealed 25% of enforcement is by schools and parks"
tags: 
    - "photo-radar"
    - "open-city"
---

While the City of Edmonton now [posts photo radar locations online](http://www.cbc.ca/news/canada/edmonton/edmonton-photo-radar-location-published-council-1.4199979),
there has been a significant amount of criticism leveled against the list.

<?php echo $__env->make('_partials.image', [ 'name' => 'smartass.jpg', 'caption' => 'Those cheeky OTS employees' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

I chuckled and upvoted, but internally I agreed with that Reddit user. I thought the city probably isn't enforcing in all those locations, and they're
probably enforcing in a bunch of non-listed locations as well.

So I issued a FOIP request, to spot-check the data. What I found actually surprised me, quite a bit.

<em>
    <small>
        If you're interested in perusing the raw data for yourself, you can view my spreadsheet <a href="https://docs.google.com/spreadsheets/d/1GFTr1sKWCj4z2SFyZQ1HgQy2VZ2HJL-tznBDjAlTiJQ/edit?usp=sharing">here</a>.
    </small>
</em>

First, a disclaimer: this is only one week of data, from a month ago, so it may be an anomaly. The process of issuing a FOIP
request and the lag time of receiving it, as well as all the associated data entry and processing can make this quite a labour-intensive
process - which is precisely why I [propose reforms to open the photo radar program](/photo-radar-reform).

<div class="center">
    <div class="card grey lighten-5 auto-margins" style="max-width: 45rem;">
        <div class="card-content">
        <span class="card-title center">Top 5 Enforcement Locations for July 15-21</span>
        <canvas id="enforcement-toplocations"></canvas>
        </div>
    </div>
</div>

The specific locations that have the most enforcement hours in the week of July 15-21 are not really surprising. If you
drive a vehicle in Edmonton you've probably seen a radar van before the bridge on Whyte, or on Saskatchewan drive or on the
Henday or Whitemud.

However, this data does **not** confirm the common assumption that photo radar "targets the Henday and never enforces around schools".
As part of this process, I examined a map of each location that had enforcement during the week and denoted whether the enforcement
was taking place in front of a school or park.

*Note: Remember that Edmonton does not yet have playground zones and school is out, so all of these "School/Playground" areas are 50 km/h*

<div class="center">
    <div class="card grey lighten-5 auto-margins" style="max-width: 45rem;">
        <div class="card-content">
        <span class="card-title center">Enforcement Hours for July 15-21</span>
        <canvas id="enforcement-share"></canvas>
        </div>
    </div>
</div>

The number of hours enforced in front of schools and parks that week (267.72 hours) is more than the Anthony Henday, Yellowhead
and Whitemud *combined* (238.7 hours). Overall, **school and park enforcement accounted for a full quarter of all enforcement hours**,
three percentage points higher than all highway enforcement.

To clarify, I don't propose that this information should absolve the photo radar program of all scrutiny. Quite the opposite, in fact.
These enforcement numbers are *surprising* to me, because they run counter to the "common knowledge" of how the photo radar program
operates. A typical argument against our photo radar program will often read "I *wouldn't* have a problem if it ever enforced in *school zones*".
It's interesting to note that opening of the data might reveal that this is already the case.

If, on a week-to-week basis, these same enforcement percentages hold true, then we should *absolutely* be more open about communicating that.

Which brings us to the next question in addressing this new "openness" initiative:

### How accurate is the list of posted photo radar locations?

According to the [released pdf](/pdf/2017-08-15-open-photo-radar-locations-audit/Enforcement.List.0715.pdf) there were 106 locations scheduled for enforcement. Of those, the following
twenty locations did not have any enforcement hours.

<div class="center">
    <div class="card grey lighten-5 auto-margins" style="max-width: 45rem;">
        <div class="card-content red lighten-2">
            <span class="card-title center">Scheduled locations that did not have enforcement</span>
        </div>
        <div class="card-content left-align">
            <ul>
                <li>105 St between 97 - 98 Ave</li>
                <li>112 Ave btwn 55 - 53 St</li>
                <li>118 Ave between 60 - 62 St</li>
                <li>132 Ave between 123 - 121 St</li>
                <li>137 Ave between 113A - 108 St</li>
                <li>139 Ave between 119 - 117 St</li>
                <li>163 St between 93 - 92 Ave</li>
                <li>189 St between 59 Ave - Callingwood Rd</li>
                <li>189 St between Callingwood Rd - 59 Ave</li>
                <li>40 Ave between 111 - 112A St</li>
                <li>40 St between 137 - 132 Ave</li>
                <li>66 St north of 167 Ave</li>
                <li>97 St between 112 - 114 Ave</li>
                <li>Ellerslie Rd SW between 109 St SW-Calgary Tr</li>
                <li>Ellerslie Rd SW between Calgary Tr-109 St SW</li>
                <li>Fort Rd between 71 - 68 St</li>
                <li>Ottewell Rd between 93A - 92 Ave</li>
                <li>Wayne Gretzky Dr btwn Capilano Bridge-106 Ave</li>
                <li>Yellowhead Trail @ Anthony Henday Dr</li>
                <li>Yellowhead Trail at 7710 Yellowhead Tr.</li>
            </ul>
        </div>
    </div>
</div>

These locations however were replaced with *twenty-one* new, unscheduled locations.

Inexplicably, the city decided to do 19 hours of enforcement on an unscheduled section of the Anthony Henday. However, many
of the other locations are inside communities and residential areas, often near schools and parks - they also have relatively
low enforcement hours associated with each location. I would say it's reasonable to speculate that many of those new locations
were driven by citizen complaints about speeding.

<div class="center">
    <div class="card grey lighten-5 auto-margins" style="max-width: 45rem;">
        <div class="card-content red lighten-2">
            <span class="card-title center">Locations where unscheduled enforcement occurred</span>
        </div>
        <div class="card-content left-align">
            <small><em><span class="green-text">Green</span> denotes a school/park</em></small>
            <ul>
                <li>Anthony Henday Dr at Whitemud Creek (19.09 hours)</li>
                <li>156 St between 99 - 98 ave (11.75 hours)</li>
                <li>Blackburn Dr W btwn Blackett Wynd - 111 St SW (6.51 hours)</li>
                <li class="green-text">Ottewell Rd between 95 - 96A Ave (5.5 hours)</li>                                             
                <li class="green-text">106 St between 38 - 35 Ave (4.5 hours)</li>
                <li>Summerside Dr SW btn Separd Ct-Summerside Gate (3.67 hours)</li>
                <li>Anthony Henday Dr at Rabbit Hill Rd (3.5 hours)</li>
                <li>4 Ave SW between 52 - 50 st (3.5 hours)</li>
                <li>Ellerslie Rd SW between 85 - 91 St SW (3.43 hours)</li>
                <li class="green-text">132 Ave between 91 - 95 st (3.25 hours)</li>
                <li class="green-text">40 Ave between 124 - 120 St (3.03 hours)</li>
                <li class="green-text">Saddleback Rd between 27 Ave - 112 St (3.03 hours)</li>
                <li>Groat Rd btwn S of 107 Ave - Victoria Pk Rd (2.75 hours)</li>
                <li>Ellerslie Rd SW between 95 - 91 St SW (2.53 hours)</li>
                <li>91 St between 63 - 58 Ave (2.42 hours)</li>
                <li>76 Ave between 85 - 87 St (2.25 hours)</li>
                <li class="green-text">119 St between Fairway Dr - 40 Ave (2.03 hours)</li>
                <li class="green-text">106 Ave between Fulton Dr - 65 st (2 hours)<strong>*</strong></li>
                <li class="green-text">179 Ave between 93 - 92 St (2 hours)</li>
                <li class="green-text">Saddleback Rd between 25 - 27 Ave (1.55 hours)</li>
                <li>184 St between 60 - 57 Ave (1.33 hours)</li>
            </ul>
        </div>
    </div>
</div>

<small>
    <strong>*</strong> whether this location actually enforces the school/park area is [in dispute](https://twitter.com/shawnbenbow/status/897525132964397056).
</small>

Interestingly, a couple locations were directly outside churches and had enforcement on Sunday. It could be a co-incidence,
but I exhaled out through my nose and said "Cool".

We had 106 scheduled locations, and we didn't enforce at 20 of them, and enforced at 21 unscheduled locations.

Additionally, twenty-eight locations had four or less hours of enforcement over the whole week. I have a hard time arguing
that including those locations is a bad thing because, and this can't be undersold:

> The entire point of the photo radar program is to get people to slow down.

After looking through the data, I have to agree that the city's initial attempt at openness with the photo radar program
has been half-hearted at best. The data about scheduled locations is deleted at the end of every week - even from the open
data catalogue. An absurd practice, at best, because storage is essentially free.

As well, the absence of after-the-fact enforcement hours in the dataset represents a glaring omission. Without enforcement
hours at each location, the list of locations are nearly meaningless (and, of course, once they're deleted they become *entirely* meaningless).
The additional context gained from looking at the data about enforcement hours allows us to actually learn about the program
and debate its merits from a perspective of knowledge, rather than conjecture and anecdotes.

And, if the city is honest when it says science and data are on its side, then it should be more than happy to prove it.

It's far past time we were allowed to trust, *and verify*.

<?php echo $__env->make('_partials.signup', [ 'signup_extra' => "Troy has a plan to open the data around the photo radar program and let any citizen audit its internals" ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<hr />

<?php echo $__env->make('_partials.posts.post-embed', [ 'slug' => 'photo-radar-repeat-offenders' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('_partials.posts.post-embed', [ 'slug' => 'edmonton-photo-radar-stats-2016' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script>

var enforcement_toplocations = document.getElementById('enforcement-toplocations').getContext('2d');
var horiz_bar = new Chart(enforcement_toplocations, {

    type: 'horizontalBar',

    // The data for our dataset
    data: {
        labels: [
            "Stony Plain Rd btwn 178 & 182 St", 
            "Whitemud Dr btwn 91 & 99 St", 
            "Whyte Ave between 91 & 95A St", 
            "Sask Dr btwn 87 & University Ave", 
            "Anthony Henday Dr @ Yellowhead Tr"
        ],
        datasets: [{
            data: [53.26, 36.08, 31.67, 28.56, 27.38 ],
            backgroundColor: [
                'rgb(173, 22, 5)',
                'rgb(54, 162, 235)',
                'rgb(216, 200, 17)',
                'rgb(99, 7, 186)',
                'rgb(178, 126, 14)',
            ]
        }],
    },

    // Configuration options go here
    options: {
        legend: { display: false },
        scales: {
            xAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true,
                    min: 0
                }
            }]
        }
    }
});

var enforcement_share = document.getElementById('enforcement-share').getContext('2d');
var pie = new Chart(enforcement_share, {

    type: 'pie',

    // The data for our dataset
    data: {
        labels: ["Anthony Henday", "Whitemud", "Yellowhead", "Schools/Parks", "Whyte Ave", "Stony Plain Road", "Other Streets"],
        datasets: [{
                data: [115.72, 65.84, 57.14, 267.72, 63.07, 60.34, 400],
                backgroundColor: [
                    'rgb(173, 22, 5)',
                    'rgb(173, 77, 5)',
                    'rgb(173, 119, 5)',
                    'rgb(6, 104, 16)',
                    'rgb(151, 152, 153)',
                    'rgb(174, 177, 178)',
                ]
            }],
    },

    // Configuration options go here
    options: {
    }
});
</script>
