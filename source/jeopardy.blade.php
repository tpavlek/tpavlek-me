@extends('_layouts.unwrapped')
@section('title', "Jeopardy!")

@section('content')
    <div class="h-96 w-full bg-cover bg-center relative" style="background-image: url('/img/projects/jeopardy.png')">
        <div class="summary-description">
            <h1 class="text-white text-5xl absolute bottom-0 left-0 right-0 pb-16 z-10">Starcraft Jeopardy</h1>
        </div>
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

    <div class="bg-blue-900 p-4 text-white text-center">
        <h1 class="text-4xl my-4 text-center">Catch up with previous episodes</h1>

        <div class="bg-grey-100 shadow pt-2 m-4 hover:bg-grey-300 inline-block">
            <h3 class="text-gold text-2xl my-4 text-center">{{ $displayEpisode['title'] }}</h3>
            @include('_partials.youtube', [ 'video_id' => explode('?v=', $displayEpisode['link'])[1], 'class' => '-mb-1' ])
        </div>

        <div class="flex flex-wrap justify-center">
            @foreach ($episodes as $key => $episode)
                <div class="max-w-xs bg-grey-100 shadow pb-2 m-4 hover:bg-grey-300">
                    <a href="{{$episode['link']}}" class="block">
                        <div class="relative">
                            <img src="/img/jeopardy/thumb{{$key + 1}}.jpg" class="">
                            <!--<i class="fa fa-4x fa-play-circle-o absolute bottom-0 top-0 left-0 right-0 h-16 w-16 text-grey m-auto opacity-75 hover:opacity-100" style="transform: translateY(40%)"></i>-->
                        </div>
                    </a>
                    <h4 class="p-2 text-gold">{!! \Illuminate\Support\Str::replaceFirst('(', '<br />(', $episode['title']) !!}</h4>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-white text-center p-8">
        <h1 class="text-4xl my-4">I lied about Starcraft Jeopardy returning!</h1>
        @include('_partials.youtube', [ 'video_id' => "KeLTcA3BZck"])
        <p class="text-xl leading-loose max-w-5xl text-center py-4 mx-auto">
            Oh boy, wouldn't it be great if this video was true?

            <br />
            Unfortunately, the passion is just dead. This video was made in a brief period where I was watching and enjoying
            Starcraft again. I just couldn't keep it up, and would do the project a huge disservice by writing questions without
            having expertise. For now, enjoy the immortalized episodes of the people you know and love from the Starcraft Community
            competing with the singular wordplay-focused question and answer style of Jeopardy.
        </p>

        <h1 class="text-gold text-5xl my-4">
            The dream is as dead as ded gaem
        </h1>
    </div>

    <div class="p-4 bg-black text-white text-center">
        <h2 class="text-2xl font-mono text-center">The Code</h2>
        <p class="font-mono text-xl leading-loose max-w-5xl text-center py-4 mx-auto">
            The Jeopardy system is open source!
        </p>
        <p class="font-mono text-xl leading-loose max-w-5xl text-center py-4 mx-auto post-content">
            You can use it to play your own games, or use the parser application I built to pull games off
            <a href="http://j-archive.com">j-archive</a>
            and play with your friends
        </p>

        <a class="button" href="https://github.com/tpavlek/Jeopardy">
            <i class="fa fa-github"></i> Check out the code on GitHub!
        </a>
    </div>
@stop
