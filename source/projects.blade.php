@extends('_layouts.wrapped')
@section('title', 'My Work')

@section('content')

    <h1 class="text-white text-center mb-4">My Work</h1>

    <div class="projects">

        @component('_partials.project')
            @slot('image', '/img/projects/speaking-municipally.jpg')

            @slot('title', 'Speaking Municipally Podcast')

            @slot('action_name', 'Listen')
            @slot('action_url', 'http://speakingmunicipally.taprootedmonton.ca')

            @slot('description')
                Together with <a href="https://twitter.com/mastermaq">Mack Male</a> I co-hosted and produced a podcast
                about municipal politics.
            @endslot
        @endcomponent

        @component('_partials.project')
            @slot('image', '/img/posts/2017-10-14-adding-some-levity/sweetie-star.jpg')

            @slot('title', 'Municipal Memes')

            @slot('action_name', 'Watch')
            @slot('action_url', '/edmonton-memes')

            @slot('description')
                I make memes for the very narrow, niche intersection of internet nerd culture and local Edmonton politics.
                There is varying levels of success.
            @endslot
        @endcomponent

        @component('_partials.project')
            @slot('image', '/img/projects/yegvotes-info.png')

            @slot('title', 'YEGVotes.info')

            @slot('action_name', 'Visit Site')
            @slot('action_url', 'https://yegvotes.info')

            @slot('description')
                    Using the Edmonton Open Data Catalogue, YEGVotes.info aggregates council voting and attendance records
                    to enable citizens to track their councillors in a more user-friendly, efficient manner.
            @endslot
        @endcomponent

        @component('_partials.project')
            @slot('image', '/img/projects/basketofyegs.png')

            @slot('title', 'Basket of YEGs Podcast')

            @slot('action_name', 'Listen')
            @slot('action_url', 'https://basketofyegs.com')

            @slot('description')
                Basket of YEGs is a local podcast focusing on municipal politics in the City of Edmonton. Each episode,
                I dig into an interesting or relevant topic to Edmontonians and attempt to break it down in the most
                consumable way possible.
            @endslot
        @endcomponent

        @component('_partials.project')
            @slot('image', '/img/projects/jeopardy.png')

            @slot('title', 'Jeopardy')

            @slot('action_name', 'Learn More')
            @slot('action_url', '/jeopardy')

            @slot('description')
                    Occasionally, in my free time, I host Jeopardy games on the internet. It started with a project called
                    Starcraft Jeopardy, a weekly show that I wrote and produced which I was then invited to perform live at
                    a Starcraft tournament called <a href="http://www.eschamp.com/kotn/">Kings of the North</a>. I also hosted <a href="https://vimeo.com/140223663">IST Jeopardy</a> for the University of
                    Alberta CONNECT conference.
            @endslot
        @endcomponent

        <div class="project ladderheroes" style="background-image: url('/img/projects/ladderheroes.png')">
            <div class="summary-description">
                <div class="leading-normal text-white z-10 absolute pin-b pin-l pin-r pb-2">
                    <h2 class="text-2xl">Ladder Heroes </h2>
                    <p class="text-xl max-w-2xl mx-auto my-4">
                        Ladder Heroes is a Blizzard-sponsored project organized by Ravi "feardragon64" Pareek. It awards points and cash prizes
                        to Grandmaster-level players in Europe and America for their weekly performance on their regions' ladders, which then
                        determine who is elligible for a monthly tournament and an even larger cash prize.
                    </p>
                    <p class="text-xl max-w-2xl mx-auto my-4">
                        The software is all custom written by myself and implements an event-sourced system that tracks the change
                        in rankings of every registered player over time, as well as tracks the point totals for each user every
                        month.
                    </p>
                    <a href="https://ladderhero.es" class="button">Visit Site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="project sodoge" style="background-image: url('/img/projects/sodoge.png')">
            <div class="summary-description">
                <div class="leading-normal text-white z-10 absolute pin-b pin-l pin-r pb-2">
                    <h2 class="text-2xl">Sodoge.ca Shibe Generator</h2>
                    <p class="text-xl max-w-2xl mx-auto my-4">
                        Built at the peak of dogecoin-frenzy, sodoge.ca is the best shibe generator on the internet. Intentionally
                        built with obfuscated navigation and confusing UX, you can either use the standard shibe-image or upload
                        your own, and apply comic sans text it various sizes and colours before sharing with your friends or on reddit.
                    </p>
                    <a href="https://github.com/tpavlek/sodoge-v2" class="button">View Code on Github <i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>

        <div class="project highyield" style="background-image: url('/img/projects/highyield.png')">
            <div class="summary-description">
                <div class="leading-normal text-white z-10 absolute pin-b pin-l pin-r pb-2">
                    <h2>The High Yield Podcast</h2>
                    <p class="text-xl max-w-2xl mx-auto my-4">
                        Filling an unfilled niche in the Starcraft content scene, I produced a podcast co-hosted by Feardragon
                        that focused on high-quality, nuanced discussions with great editing. The show ran for four episodes including
                        a christmas-special radio play.
                    </p>
                    <a href="https://highyieldcast.com" class="button">Listen <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="project sc2ctl" style="background-image: url('/img/projects/sc2ctl.png')">
            <div class="summary-description">
                <div class="leading-normal text-white z-10 absolute pin-b pin-l pin-r pb-2">
                    <h2>The Starcraft II Community Team League </h2>
                    <p class="text-xl max-w-2xl mx-auto my-4">
                        The Starcraft II Community Team League was a project borne out of passion for Starcraft II.
                        In its prime, it was the largest SC2 Team League in the world, with sponsors like Das Keyboard and MYTHLOGIC.
                        In its two seasons, it saw participation from hundreds of teams and gave away thousands in prize money and gear.
                    </p>
                    <p class="text-xl max-w-2xl mx-auto my-4">
                        The website set it apart from its competitors, fully automating the match reporting, bracket-generation
                        and logistics of running a tournament - something no other SC2 organization had done previously,
                        which permitted it to run at the scale it did.
                    </p>
                    <a href="/sc2ctl" class="button">More Information <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>

@stop
