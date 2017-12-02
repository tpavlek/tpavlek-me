@extends('_layouts.unwrapped')
@section('title', "Jeopardy!")

@section('content')
    <div class="h-64 w-full bg-cover bg-center relative" style="background-image: url('/img/projects/jeopardy.png')">
        <div class="summary-description">
            <h1 class="text-white text-5xl absolute pin-b pin-l pin-r pb-16 z-10">Starcraft Jeopardy</h1>
        </div>
    </div>
    <div class="bg-blue-darkest text-white text-center p-8">
        <h1 class="text-4xl my-4">Starcraft Jeopardy is returning!</h1>
        <iframe class="mx-auto" width="640" height="360" src="https://www.youtube.com/embed/9g3--WYH8SY" frameborder="0" allowfullscreen></iframe>
        <p class="text-xl leading-loose max-w-xl text-center py-4 mx-auto">
            For three months in 2015, Starcraft Jeopardy graced the internet. Hosted by Troy Pavlek, it brought something
            completely unique and new to the table. A gameshow with the people you know and love from the Starcraft community
            with the singular wordplay-focused question and answer style of Jeopardy.
        </p>

        <h1 class="text-gold text-5xl my-4">
            And now, in 2018, Starcraft Jeopardy will return
        </h1>
    </div>
    <div class="bg-white text-center p-8">
        <h2 class="text-3xl my-4">Want to participate in Starcraft Jeopardy?</h2>
        <a href="mailto:troy@tpavlek.me&subject='I would like to participate in Starcraft Jeopardy'" class="button text-3xl">
            <i class="fa fa-envelope"></i> &nbsp; Apply via Email
        </a>
        <p class="text-xl leading-loose max-w-xl text-center py-4 mx-auto">
            I'm looking for a total of <strong>fifteen (15)</strong> participants for the season in early 2015. If you've already played
            Starcraft Jeopardy, feel free to apply again. However, I may prioritize new faces for this limited run.
        </p>

        <h3 class="text-2xl my-4">
            Have a question idea?
        </h3>
        <p class="text-xl leading-loose max-w-xl text-center py-4 mx-auto">
            You don't need to be an expert in wordplay or cleverness - the most helpful type of submission is one that just
            states a fact. I'm very skilled at turning true statements into interesting questions and categories, so any contribution
            makes the show much easier to produce.
        </p>
        <a href="mailto:troy@tpavlek.me&subject='Starcraft Jeopardy Question Submission'" class="button text-2xl">
            <i class="fa fa-envelope"></i> &nbsp; Email a suggestion
        </a>
    </div>

    <div class="bg-blue-darker p-4 text-white">
        <h1 class="text-4xl my-4 text-center">What's coming?</h1>
        <p class="text-xl leading-loose max-w-xl text-center py-4 mx-auto">
            Question writing and production has already begun. In <strong>mid-January, 2018</strong> we will be recording
            <strong>five (5)</strong> episodes of Starcraft Jeopardy that will premiere in the period of January and February.
        </p>
        <p class="text-xl leading-loose max-w-xl text-center py-4 mx-auto post-content">
            The episodes will premiere on <a href="https://twitch.tv/troy_pavlek">Troy's Twitch Channel</a> with VODs being posted on
            <a href="https://youtube.com/troypavlek">YouTube</a> immediately afterward.
        </p>
    </div>

    @php
        $episodes = collect([
            [ 'title' => 'Gemini, Jackson & Fenner (Ep. 1)', 'link' => 'https://www.youtube.com/watch?v=qtL4nnSP8iE', ],
            [ 'title' => 'PengWin, SirRobin & Gemini (Ep. 2)', 'link' => 'https://www.youtube.com/watch?v=yD_i4In_yY4' ],
            [ 'title' => 'nice__username, JaKaTaK & PengWin (Ep. 3)', 'link' => 'https://www.youtube.com/watch?v=0Q11FZsXhwc' ],
            [ 'title' => 'Jade, ploguidic3, & PengWin (Ep. 4)', 'link' => 'https://www.youtube.com/watch?v=Ybzh6YOy3es'],
            [ 'title' => 'Temp0, Lycan & PengWin (Ep. 5)', 'link' => 'https://www.youtube.com/watch?v=8vwIDV2k3fU' ],
            [ 'title' => 'Feardragon, Neuro & PengWin (Ep. 6)', 'link' => 'https://www.youtube.com/watch?v=i6IF9x8zVS0' ],
            [ 'title' => 'Arium, QueenE & PengWin (Ep. 7)', 'link' => 'https://www.youtube.com/watch?v=Q4_2A-Hns_g'],
            [ 'title' => 'Peanuts, Banjoe & PengWin (Ep. 8)', 'link' => 'https://www.youtube.com/watch?v=8F2laib1wMs'],
            [ 'title' => 'Pughy, Intense & Peanuts (Ep. 9)', 'link' => 'https://www.youtube.com/watch?v=ayriG5QZCCw', ],
            [ 'title' => 'Gretorp, Xiphias & Peanuts (Ep. 10)', 'link' => 'https://www.youtube.com/watch?v=qIiocinURj8' ],
            [ 'title' => 'HuK, DesRow & Gretorp (Ep. 11)', 'link' => 'https://www.youtube.com/watch?v=0TEA9GMauSw' ],
            [ 'title' => 'LIVE: Huk, Semper & Steadfast (Ep. 12)', 'link' => 'https://www.youtube.com/watch?v=bOSpMeko078' ],
            [ 'title' => 'LIVE: Steadfast, Scarlett & puCK (Ep. 13)', 'link' => 'https://www.youtube.com/watch?v=b3jIYjvtJf8']
        ]);

        $displayEpisode = $episodes->get(5);
    @endphp

    <div class="p-4 text-white text-center">
        <h1 class="text-4xl my-4 text-center">Catch up with previous episodes</h1>

        <div class="bg-grey-lightest shadow pt-2 m-4 hover:bg-grey-light inline-block">
            <h3 class="text-gold text-2xl my-4 text-center">{{ $displayEpisode['title'] }}</h3>
            <iframe class="mx-auto -mb-1" width="640" height="360" src="https://www.youtube.com/embed/{{ explode('?v=', $displayEpisode['link'])[1] }}" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="flex flex-wrap justify-center">
            @foreach ($episodes as $key => $episode)
                <div class="max-w-xs bg-grey-lightest shadow pb-2 m-4 hover:bg-grey-light">
                    <a href="{{$episode['link']}}" class="block">
                        <div class="relative">
                            <img src="/img/jeopardy/thumb{{$key + 1}}.jpg" class="">
                            <!--<i class="fa fa-4x fa-play-circle-o absolute pin-b pin-t pin-l pin-r h-16 w-16 text-grey m-auto opacity-75 hover:opacity-100" style="transform: translateY(40%)"></i>-->
                        </div>
                    </a>
                    <h4 class="p-2 text-gold">{!! str_replace_first('(', '<br />(', $episode['title']) !!}</h4>
                </div>
            @endforeach
        </div>
    </div>

    <div class="p-4 bg-black text-white text-center">
        <h2 class="text-2xl font-mono text-center">The Code</h2>
        <p class="font-mono text-xl leading-loose max-w-xl text-center py-4 mx-auto">
            The Jeopardy system is open source!
        </p>
        <p class="font-mono text-xl leading-loose max-w-xl text-center py-4 mx-auto post-content">
            You can use it to play your own games, or use the parser application I built to pull games off
            <a href="http://j-archive.com">j-archive</a>
            and play with your friends
        </p>

        <a class="button" href="https://github.com/tpavlek/Jeopardy">
            <i class="fa fa-github"></i> Check out the code on GitHub!
        </a>
    </div>
@stop
