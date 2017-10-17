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

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/prism.css" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    @yield('social_meta', '')
</head>
<body>
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
<div class="wrap">

    <nav class="main-nav">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo"><img src="/img/campaign-logo/logo-basic-inverted.png" /></a>
            <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="{{ $page->twitter_url }}"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="{{ $page->facebook_url }}"><i class="fa fa-facebook"></i> </a>
                </li>
            </ul>
            <ul id="mobile-nav" class="side-nav">
                <li>
                    <a href="{{ $page->twitter_url }}"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
                <li>
                    <a href="{{ $page->facebook_url }}"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
            </ul>
        </div>
    </nav>


    @yield('body_content')

</div>
<div class="footer">
    <div class="description">
        <span class="title">Troy Pavlek</span>
        <p>
            I make stuff and lose elections
        </p>
        &copy; Troy Pavlek
        <br />
    </div>
    <div class="footer-column navigation">
        <span class="title">Navigation</span>
        <a href="/blog">Blog</a>
        <a href="/about">About Troy</a>
        <a href="/projects">My Work</a>
        <a href="https://basketofyegs.com">Basket of YEGs Podcast</a>
        <a href="/media">In the Media</a>
    </div>
    <div class="footer-column contact">
        <span class="title">Contact</span>
        <a href="{{ $page->twitter_url }}">Twitter</a>
        <a href="{{ $page->facebook_url }}">Facebook</a>
        <a href="mailto:troy@tpavlek.me">Email</a>
        <a href="https://github.com/tpavlek">GitHub</a>
        <a href="/rss.xml">Blog RSS</a>
    </div>

</div>

@yield('scripts', '')
<script src="/js/prism.js"></script>

@if ($page->google_analytics_tracking_id)
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ $page->google_analytics_tracking_id }}', 'auto');
    ga('send', 'pageview');
</script>

<script>
    $(".button-collapse").sideNav();
</script>
@endif
</body>
</html>
