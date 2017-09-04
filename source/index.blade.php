---
exclude_home_nav: true
title: "Troy Pavlek -- Edmonton City Council Candidate for Ward 11"
description: "Troy Pavlek is running for a City Council seat in Ward 11. He brings a youthful, technology-aware, and data-focused approach to the problems facing the City of Edmonton."
---
@extends('_layouts.unwrapped')
@section('title', "Let's talk")

@section("social_meta")
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="{{ $page->title }}"/>
    <meta property="og:title" content="{{ $page->title }}"/>

    @if($page->description)
        <meta name="twitter:description" content="{{ $page->description }}"/>
        <meta property="og:description" content="{{ $page->description }}"/>
    @else
        <meta name="twitter:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
        <meta property="og:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
    @endif

    <meta name="twitter:image" content="{{$page->baseUrl}}/img/splash-banner-bg.jpg"/>
    <meta property="og:image" content="{{ $page->baseUrl }}/img/splash-banner-bg.jpg"/>

    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
@stop

@section('content')

    <div class="row">
        <div class="col s6" style="text-align: right;">
            <a href="/request-a-sign">
            <div class="action-svg sign-svg-container">

                <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        version="1.1"
                        id="svg3822"
                        width="1807.3794"
                        height="1603.5017"
                        viewBox="0 0 1807.3795 1603.5017"
                        sodipodi:docname="troy-black.svg"
                        inkscape:version="0.92.2 5c3e80d, 2017-08-06">
                    <metadata
                            id="metadata3828">
                        <rdf:RDF>
                            <cc:Work
                                    rdf:about="">
                                <dc:format>image/svg+xml</dc:format>
                                <dc:type
                                        rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                <dc:title></dc:title>
                            </cc:Work>
                        </rdf:RDF>
                    </metadata>
                    <defs
                            id="defs3826" />
                    <sodipodi:namedview
                            pagecolor="#ffffff"
                            bordercolor="#666666"
                            borderopacity="1"
                            objecttolerance="10"
                            gridtolerance="10"
                            guidetolerance="10"
                            inkscape:pageopacity="0"
                            inkscape:pageshadow="2"
                            inkscape:window-width="1920"
                            inkscape:window-height="1010"
                            id="namedview3824"
                            showgrid="false"
                            inkscape:zoom="0.53"
                            inkscape:cx="780.58073"
                            inkscape:cy="981.29315"
                            inkscape:window-x="0"
                            inkscape:window-y="41"
                            inkscape:window-maximized="1"
                            inkscape:current-layer="layer3"
                            fit-margin-top="0"
                            fit-margin-left="0"
                            fit-margin-right="0"
                            fit-margin-bottom="0" />
                    <g
                            inkscape:groupmode="layer"
                            id="layer3"
                            inkscape:label="Single"
                            transform="translate(131.58665,-684.37244)">
                        <path
                                style="display:inline;opacity:1;fill-opacity:0;stroke-width:60;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                d="m -101.58665,714.37244 c 582.4598,0 1164.91955,0 1747.37935,0 0,368.41866 0,736.83726 0,1105.25586 -582.4598,0 -1164.91955,0 -1747.37935,0 0,-368.4186 0,-736.8372 0,-1105.25586 z"
                                id="rect3901"
                                inkscape:connector-curvature="0" />
                        <path
                                style="stroke-width:1.33333337"
                                d="m 1210.1243,1590.6057 c -14.3813,-2.5488 -29.4539,-7.5785 -44.4555,-14.8348 -11.0265,-5.3335 -12.3709,-6.3616 -11.7183,-8.9619 0.696,-2.7729 34.9338,-82.0889 35.8153,-82.9704 0.2274,-0.2274 5.0103,1.8967 10.6287,4.7203 14.4621,7.2682 22.4459,8.8179 35.742,6.9376 21.0999,-2.9839 33.7256,-12.5935 43.7416,-33.2923 5.3282,-11.0111 5.8421,-12.8624 4.6266,-16.6667 -0.752,-2.3538 -33.0199,-76.5796 -71.7064,-164.9463 -38.6865,-88.3666 -70.6359,-161.7224 -70.9987,-163.0127 -0.6241,-2.2196 2.8831,-2.3273 65.1205,-2 l 65.7801,0.346 25.8442,78.6667 c 14.2143,43.2667 28.3839,88.8156 31.4878,101.2199 l 5.6436,22.5531 4.8685,-20.5531 c 2.6776,-11.3043 14.9198,-57.0032 27.2048,-101.5532 l 22.3363,-81 h 63.1749 63.1749 l -0.6165,3 c -1.4697,7.1528 -141.8739,381.3692 -146.6852,390.9572 -11.6345,23.1853 -28.5597,43.6837 -47.0092,56.9337 -14.0832,10.1143 -35.9956,19.3288 -55.3333,23.2685 -14.2539,2.904 -43.523,3.5178 -56.6667,1.1884 z M 736.79095,1461.9511 c -7.33333,-0.5455 -15.43333,-1.4076 -18,-1.9156 -16.72678,-3.3106 -29.33333,-6.4791 -29.33333,-7.3726 0,-0.5735 2.69767,-2.073 5.99483,-3.3322 8.69443,-3.3204 24.49241,-14.0451 30.72026,-20.8549 12.90143,-14.1068 20.49564,-33.9998 21.5636,-56.4855 0.39771,-8.3737 0.0732,-17.8976 -0.75173,-22.0657 -0.79829,-4.0334 -2.98341,-14.8334 -4.85584,-24 -13.19293,-64.5877 3.45228,-124.4001 46.57741,-167.3698 47.26154,-47.0912 118.17983,-66.1327 190.49468,-51.1476 57.10017,11.8323 104.34917,46.8157 128.57097,95.1946 21.295,42.5329 24.289,95.1008 8.0491,141.3228 -19.9512,56.785 -71.8072,99.4047 -137.02997,112.6227 -17.96723,3.6412 -43.84773,5.7222 -58.66339,4.717 -28.09932,-1.9065 -59.07515,-9.3536 -81.15476,-19.5108 l -11.15151,-5.13 -10.84849,7.2111 c -22.4714,14.9369 -47.35315,20.5588 -80.18183,18.1165 z M 178.79098,1264.5912 v -194.6667 h -74 -74.000003 v -51.3333 -51.33336 H 234.79097 438.79096 v 51.33336 51.3333 h -74 -74 v 194.6667 194.6667 h -55.99999 -55.99999 z m 258.66665,22.6667 v -172 h 51.18232 51.18232 l 0.74669,32.3333 c 0.41068,17.7833 1.15133,34.3147 1.64591,36.7364 0.87417,4.2804 1.09825,4.0017 8.04105,-10 20.40685,-41.1549 57.37309,-66.9457 99.35329,-69.3173 7.78336,-0.4397 15.73336,-0.4024 17.66667,0.083 l 3.51508,0.8822 v 56.6136 56.6136 l -16.33334,-0.8108 c -18.60377,-0.9235 -31.13692,0.613 -46.17302,5.6604 -28.38206,9.5276 -48.08057,32.4514 -55.07041,64.0872 -2.75531,12.4704 -2.92514,17.0221 -3.43698,92.1186 l -0.53845,79 H 493.3482 437.45763 Z"
                                id="path3898"
                                inkscape:connector-curvature="0" />
                        <rect
                                id="rect3905-3"
                                width="66.037735"
                                height="469.81131"
                                x="1387.7358"
                                y="1815.2328" />
                        <rect
                                id="rect3905"
                                width="66.037735"
                                height="469.81131"
                                x="49.056602"
                                y="1815.2328" />
                    </g>
                </svg>

                <div class="center">
                    <span class="action">Request a Sign</span>
                </div>
            </div>
            </a>


        </div>
        <div class="col s6">

            <a href="/donate">
                <div class="action-svg dollar-svg-container">
                    <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z"/></svg>
                    <div class="center">
                        <span class="action">Donate</span>
                    </div>
                </div>
            </a>


        </div>
    </div>

    <div class="row">
        <div class="col s12 l8 offset-l2 center">
            <div class="card hero-card">
                <div class="card-image troy-primary-color">
                    <img src="/img/splash-banner.png" />
                </div>
                <div class="card-content">
                    <div class="policy-links left-align">
                        <a href="/platform" class="policy-link">Platform</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="blog-bar">
    <a href="/blog" class="blog-header">
        <h1>
            Recent Updates
        </h1>
    </a>

    <div class="flex row-wrap">
        @foreach ($posts->slice(0,3) as $post)
            <a href="{{$post->getUrl()}}" class="summary-block" style="background-image:url('{{$post->imgpath}}{{$post->img}}')">
                <div class="summary-description">
                    <div class="text">
                        <span class="title">{{ $post->title }}</span>
                        <span class="date">{{ $post->date }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <a href="/blog" class="button">View All Posts</a>
</div>

<div class="policy-block">
    <h1 style="text-align:center">Hi! I'm Troy. Let's talk. &nbsp; <a href="#lets-talk"><i
                    class="fa fa-chevron-circle-down"></i></a></h1>
    <a id="lets-talk"></a>
    <div class="post-content">
        <p>
            I am running to be Edmonton's City Councillor for Ward 11. Professionally, I'm a software developer and I believe
            that my technological expertise can fill a niche that has been rarely, if ever, filled on our city council.
        </p>

        <p>
            I believe in true openness, that's why you'll find me broadcasting strong, detailed positions on issues.
            You'll find my <a href="/platform">Platform</a> on this website and I don't equivocate and try to play both
            sides on the issues that matter.
        </p>

        <p>
            When writing great software within a budget, there is a well accepted practice:
            <em>break down problems into their smallest solveable pieces</em> and <em>don't repeat yourself</em>.
        </p>

        <p>
            I believe these same concepts can be applied directly to Edmonton City's Council. The way we improve our city is
            not by making one big single "solve the city" policy. Rather, we need to look at the small stuff. That road behind
            your house. That one bus route. The slow intersection -- you know the one!. When we use data to solve <em>individual</em>
            problems well, eventually, we'll have made the entire city better through all those small solutions.
        </p>

        <p>
            We need a new voice on City Council. I look forward to convincing you that I can be that voice.
        </p>

        <p>
            Any questions or feedback? I want to talk with <strong>you</strong>.
        </p>

        @include('_partials.contact')


    </div>

</div>

@stop


