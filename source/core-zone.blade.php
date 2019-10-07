---
imgpath: "/img/core-zone/"
img: "road-type-map.jpg"
title: "#YEGCoreZone"
description: "The Core Zone will be a place in the densest parts of the city where our streets are welcoming, shared, safe and vibrant for people of all ages and abilities."
---

@extends('_layouts.unwrapped')

@section("title", '#YEGCoreZone')

@section('content')

    <div class="h-64 w-full bg-cover bg-center relative" style="background-image: url('/img/core-zone/yeg-core-zone.jpg')">

    </div>

    <div class="bg-green-darkest text-white text-center p-8">
        <h1 class="text-4xl my-4">What is the #YEGCoreZone?</h1>

        <p class="text-xl leading-loose max-w-xl text-left py-4 mx-auto">
            The Core Zone is an idea spearheaded by <a href="https://twitter.com/JulieKusiek/status/1115618666366656512" class="text-white">Julie Kusiek</a> as part of the Living Streets Edmonton Proposal
            <br />
            It’s a place in the densest parts of the city where our streets are welcoming, shared, <strong>safe and vibrant for people of all ages and abilities</strong>.
            <br />
            On April 24, we’ll call on #yegcc to change its recent motion for city-wide 40km/h residential speed limits, which isn’t much safer than 50km/h.
            We’ll call on them to adopt the #YEGCoreZone concept: 30km/h on residential streets within the inner city <strong>but not outside of it</strong>.
        </p>

    </div>

    <div class="bg-white p-8 text-center">
        <h1 class="text-3xl text-black my-4 text-center">What does the #YEGCoreZone look like?</h1>

        <p class="text-xl text-left leading-loose max-w-xl mx-auto">
            In the following map:
            <ul class="text-xl text-left leading-loose max-w-xl mx-auto">
                <li>
                    <strong class="text-blue">blue</strong> represents the <strong class="text-blue">boundary of the zone</strong>.
                </li>
            <li>
                <strong class="text-green">green</strong> represents <strong class="text-green">local roadways</strong> which would be 30km/h inside the zone.
            </li>
            <li>
                <strong class="text-yellow-dark">yellow</strong> represents <strong class="text-yellow-dark">collector roadways</strong> which would be 40km/h inside the zone.
            </li>
            <li>
                <strong class="text-red-light">red</strong> represents <strong class="text-red-light">arterial roadways</strong> which would not change.
            </li>
            </ul>
        </p>

        <p class="text-xl text-left leading-loose max-w-xl mx-auto">
            The roadways outside of the <span class="text-blue">blue Core Zone</span> <em>would not change</em>.
        </p>
    </div>
    <div id="map" class="w-full" style="height:50rem;"></div>

    <div class="bg-white p-8 text-center">
        <h1 class="text-3xl text-black my-4 text-center">Want to see change?</h1>

        <p class="text-xl text-left leading-loose max-w-xl mx-auto">
            We can't miss this opportunity, so if you support the idea of a liveable, safe and vibrant space in the core of
            our city, share with your friends, talk about it on social media with the hashtag #YEGCoreZone and most importantly
            <strong>contact your councillor</strong>.

            <br />

            Change can happen when we rally behind a common cause. Let's make #YEGCoreZone a reality on April 24th.
        </p>

        <iframe width="400px" height="200px" src="https://chuihinwai.github.io/email-contact/"></iframe>

        <h2 class="text-xl text-black">Learn more:</h2>
        <div class="max-w-2xl mx-auto my-4 text-left">
            @include('_partials.posts.post-embed', [ 'slug' => 'yeg-core-zone' ])
        </div>
    </div>

@stop

@section("scripts")

    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: 53.533994, lng: -113.498703}
            });

            map.data.setStyle(function (feature) {
                if (feature.getProperty('type') == 'collector') {
                    return /** @type {!google.maps.Data.StyleOptions} */({
                        fillColor: '#f2d024',
                        strokeColor: '#f2d024',
                        strokeWeight: 2
                    });
                }

                if (feature.getProperty('type') == 'boundary') {
                    return /** @type {!google.maps.Data.StyleOptions} */({
                        fillColor: '#3490dc',
                        strokeColor: '#3490dc',
                        strokeWeight: 6
                    });
                }

                if (feature.getProperty('type') == 'arterial') {
                    return ({
                        fillColor: '#ef5753',
                        strokeColor: '#ef5753',
                        strokeWeight: 1
                    });
                }

                return /** @type {!google.maps.Data.StyleOptions} */({
                    fillColor: '#38c172',
                    strokeColor: '#38c172',
                    strokeWeight: 1
                });
            });
            map.data.loadGeoJson('/local-collectors.geojson');
            map.data.loadGeoJson('/boundary.geojson');
            map.data.loadGeoJson('/arterial.geojson');
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKCbT9BLnZfRwq-OXQlE_S0SkR6xiRAlQ&callback=initMap"
            async defer></script>

@stop
