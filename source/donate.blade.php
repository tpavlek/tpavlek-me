---
description: "Troy Pavlek is running for a City Council seat in Ward 11. He brings a youthful, technology-aware, and data-focused approach to the problems facing the City of Edmonton."
---

@extends('_layouts.wrapped')
@section('title', "Donate to Troy Pavlek's Ward 11 Campaign")

@section("social_meta")
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="Donate to Troy Pavlek for Ward 11"/>
    <meta property="og:title" content="Donate to Troy Pavlek for Ward 11"/>

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
    <h1 style="text-align:center;">Donate to Troy Pavlek's Ward 11 Campaign</h1>

    <article class="is-centered post">
        <div class="post-content">
            <h3>With your help we can bring positive change to City Hall</h3>

            @include('_partials.youtube', [ 'video_id' => '1Nx2C_n1k90' ])

            <p>
                Any amount you donate goes a long way to helping get the message out!
            </p>

            <p>
                If it's more convenient for you (and you'd like to help us cut out PayPal fees), you can send an e-transfer to <strong>troy@tpavlek.me</strong>
            </p>

            <p>
                Donations below are processed through PayPal. If you would like to make a cash donation, please get in
                <a href="/contact">contact</a> and someone will come meet you.
            </p>

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="donate-form"
                  style="text-align:center;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="825ZFX9R2ZEBN">
                <button type="submit" class="button xlarge">Donate</button>
            </form>

            <p>
                <strong>Note:</strong> Due to Alberta legislation, donations may not be anonymous and all donors must
                reside
                within the province of Alberta.
            </p>

        </div>
    </article>
@stop

