---
imgpath: "/img/2021-election-pool/"
img: "banner.jpg"
title: "The 2021 Edmonton Election Pool"
description: "Do you have what it takes to predict EXACTLY who will win the Edmonton municipal election? Put your money where your mouth is and enter the election pool! All winnings will be donated to charity."
---

@extends('_layouts.unwrapped')
@section('title', $page->title)

@section('content')
    <div class="h-96 w-full bg-cover bg-top relative" style="background-image: url('/img/2021-election-pool/banner.jpg')">
        <div class="summary-description">
            <div class="text-white text-center absolute bottom-0 left-0 right-0 pb-8 z-10">
                <h1 class="text-5xl text-white">{{ $page->title }}</h1>
                <p class="max-w-5xl mx-auto text-lg leading-loose">
                    {{ $page->description }}
                </p>
            </div>
        </div>
    </div>

    <div class="bg-purple-900 text-white text-center p-2 lg:p-8">

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfKrK5pSk5sYduCgpePM3CRS6Mj8uI_Gb2SYRkiaznSwrAVWg/viewform?usp=sf_link" class="bg-yellow-500 font-bold px-6 py-4 text-xl text-black hover:bg-yellow-600 rounded-lg shadow">
            Fill out your election pool ballot
        </a>

        <div class="lg:flex items-center lg:space-x-4">
            <div class="text-xl leading-loose max-w-5xl py-4 mx-auto">
                <p>
                    What's more fun than participating in the democratic process and electing a new crew of representatives to
                    govern the city and the region for the next 4 years? Well, betting of course!
                </p>
                <p>
                    The quick deets:
                </p>
                <ul class="text-left">
                    <li>$10 buy-in</li>
                    <li>Guess Mayor, councillors, school board trustees, referndum outcome, and senators</li>
                    <li>Entire pot donated to charity</li>
                    <li>Winner chooses which charity receives the pot</li>
                    <li>Entries close Saturday, October 16th, 9PM Mountain Time.</li>
                </ul>
                <p>

                </p>
            </div>
        </div>


    </div>

    <div class="bg-white text-center p-2 lg:p-8">

        <h1 class="text-3xl">How to participate</h1>

        <div class="max-w-5xl leading-loose text-lg text-center mx-auto">
            <ol class="text-left">
                <li>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfKrK5pSk5sYduCgpePM3CRS6Mj8uI_Gb2SYRkiaznSwrAVWg/viewform?usp=sf_link" class="font-bold underline">Fill out an entry</a>.
                </li>
                <li>
                    e-transfer $10 to <strong>troy@tpavlek.me</strong> (if you need to use some other method like sending a bag of pennies just send me an email)
                </li>
                <li>
                    If you used two different emails to fill out the ballot and send the transfer, then make sure to reach out and let me know that they're connected.
                </li>
                <li>
                    Trash talk the other participants for choosing badly in a group twitter DM.
                </li>
                <li>
                    Wait in nervous anticipation to see how wrong you were in your predictions.
                </li>
            </ol>

        </div>

        <h1 class="text-3xl">The full rules</h1>
        <div class="max-w-5xl leading-loose text-lg text-left mx-auto">
            Each entry to the election pool contains guesses for the following races:
            <ol>
                <li><strong>Mayor</strong> (5 points)</li>
                <li><strong>Councillor</strong> (5 points each)</li>
                <li><strong>Public School Trustee</strong> (1 point each)</li>
                <li><strong>Catholic School Trustee</strong> (1 point each)</li>
                <li><strong>Two Referendum Questions</strong> (1 point each)</li>
                <li><strong>Three senators-in-waiting</strong> (1 point each)</li>
            </ol>

            You must select a choice for each of the 13 seats of council, but you may choose to leave the rest blank, if you like scoring fewer points, I guess.
            <p>
                There is a bonus question for guessing the <strong>total number of votes</strong> the winning mayoral candidate will receive. This is a competitive question, and is evaluated with
                "price-is-right" rules. The entry who guesses the closest to the total number of votes <em>without going over</em> will be awarded <strong>nine bonus points</strong>. If you
                manage to guess <em>exactly</em> the correct number of votes, you will receive an additional <strong>six bonus points</strong> for a total of fifteen. <br/>
                If two or more entries are tied on this bonus question, all will receive the full number of bonus points.
            </p>

            <p>
                In order for an entry to be considered valid, it must be submitted <strong>and the entry fee paid</strong> by <strong>October 16th, 9PM Mountain Time</strong>. You can continue
                to edit your responses until that time. But don't leave it to the very last minute, please.
            </p>

            <p>
                The winner (the person who has the highest number of points at the end) will get to choose a <strong>registered charity</strong>
                to receive the entire pot. In the case of a tie, the pot will be split equally, and each co-victor may choose a charity for their share of the pot.
                The recipient <strong>must be a registered charity</strong>.
            </p>
            <p>
                Troy, the organizer, will also be participating for funsies, but he is inelligible to win. If he ends up with the highest points, the runner-up(s) will get
                to make all decisions about which charity receives the pot.
            </p>
            <p>
                There's no gambling here, go arrest someone else, Kenney.
            </p>
            <p>
                Any questions or concerns can be emailed to <strong>troy@tpavlek.me</strong>
            </p>
        </div>

        <div class="mt-6">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfKrK5pSk5sYduCgpePM3CRS6Mj8uI_Gb2SYRkiaznSwrAVWg/viewform?usp=sf_link" class="mt-6 bg-yellow-500 font-bold px-6 py-4 text-xl text-black hover:bg-yellow-600 rounded-lg shadow">
                Fill out your election pool ballot
            </a>
        </div>

    </div>
@stop
