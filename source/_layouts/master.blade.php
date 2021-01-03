<!DOCTYPE html>
<html>
<head>
    <title>Troy Pavlek: @yield('title', "I lose elections")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">

    <!-- Styles -->
    <style>
        @import '//fonts.googleapis.com/css?family=Inconsolata:400|Lato:300,400,400i,700,900';
    </style>

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="stylesheet" href="{{ mix('css/sc2ctl.css', 'assets/build') }}">

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3221bcdf2a.js" crossorigin="anonymous"></script>
    @yield('social_meta', '')
</head>
<body class="{{ $page->body_color_class }}">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1161296450644866";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));</script>
<div class="wrap" id="root">
    <nav class="flex items-center justify-between flex-wrap {{ $page->nav_color_class }} h-16">
        <div class="flex flex-col items-center flex-no-shrink text-white mr-8">
            <a href="/" class="w-24 p-2">
                <img src="/img/campaign-logo/logo-basic-inverted.png" class="my-auto"/>
            </a>
        </div>
        <div class="flex-grow flex items-center justify-end w-auto">
            <a href="/speaking-municipally" class="text-white hover:text-gold text-xl p-2 mr-2 no-underline">
                Podcast
            </a>

            <a href="/dessert-people" class="text-white hover:text-gold text-xl p-2 mr-2 no-underline">
                Dessert People
            </a>

            <div class="text-sm lg:flex-grow">
                <a href="{{ $page->twitter_url }}" class="text-white text-xl hover:text-gold p-2 mr-2 no-underline">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
        </div>
    </nav>


    @yield('body_content')

</div>
<div class="p-2 lg:p-8 bg-grey-900 text-center leading-loose">
    <div class="inline-flex flex-col lg:flex-row mx-auto">
        <div class="flex-1 text-left p-2 lg:p-8">
            <span class="text-lg text-white">Troy Pavlek</span>
            <p class="text-grey-200 font-thin whitespace-no-wrap">
                I make stuff and lose elections
            </p>
            <span class="text-grey-200 font-thin">&copy; Troy Pavlek</span>
            <br />
        </div>
        <div class="flex-1 text-left p-2 lg:p-8">
            <span class="text-lg text-white">Navigation</span>
            <p>
                <a href="/blog" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">Blog</a>
                <a href="/about" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">About Troy</a>
                <a href="/projects" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">My Work</a>
                <a href="/media" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">In the Media</a>
            </p>
        </div>
        <div class="flex-1 text-left p-2 lg:p-8">
            <span class="text-lg text-white">Contact</span>
            <p class="text-grey-200 font-thin no-underline hover:border-b">
                @if ($page->twitter_url)
                    <a href="{{ $page->twitter_url }}" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">Twitter</a>
                @endif
                @if($page->facebook_url)
                    <a href="{{ $page->facebook_url }}" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">Facebook</a>
                @endif
                @if ($page->email)
                    <a href="mailto:{{ $page->email }}" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">Email</a>
                @endif
                <a href="https://github.com/tpavlek" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">GitHub</a>
                <a href="/rss.xml" class="block text-grey-200 font-thin no-underline hover:border-grey-200 border-b-2 border-transparent">Blog RSS</a>
            </p>
        </div>
    </div>

</div>

<script src="{{ mix('js/app.js', 'assets/build') }}"></script>
@yield('scripts', '')

@if ($page->google_analytics_tracking_id)
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ $page->google_analytics_tracking_id }}', 'auto');
    ga('send', 'pageview');
</script>
@endif
</body>
</html>
