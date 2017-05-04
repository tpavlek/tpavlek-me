<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
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
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/prism.css" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    @yield('social_meta', '')
</head>
<body>
<div class="wrap">
    @if (!$page->exclude_home_nav)
        <a href="/" class="home-nav"><img src="/img/campaign-logo/logo-basic-inverted.png" /></a>
    @endif
    <nav class="main-nav">
        <ul>
            <li>
                <a href="/subscribe">Subscribe</a>
            </li>
            <!--<li>
                <a href="#">Get A Sign</a>
            </li>-->
            <li class="secondary-action">
                <a href="/subscribe">Volunteer</a>
            </li>
            <li class="primary-action">
                <a href="/donate">Donate</a>
            </li>
        </ul>
    </nav>
    @yield('body_content')

</div>
<div class="footer">
    <div class="description">
        <h3>The Campaign to Elect Troy Pavlek to City Council</h3>
        <p>
            Troy Pavlek is a software developer, civic policy enthusiast and resident of Hazeldean in Ward 11.
            When he's not developing software using the open data catalogue or talking about civic issues on his
            podcast, he's writing or thinking about the City of Edmonton in some way. Let him be your passionate
            voice on Edmonton's City Council. Vote Troy Pavlek to Edmonton City Council in Ward 11.
        </p>
        &copy; Troy Pavlek
        <br />
        Design work by Daria Nordell
    </div>
    <div class="navigation">
        <h3>Navigation</h3>
        <a href="/blog">Blog</a>
        <a href="/about">About Troy</a>
        <a href="/projects">My Work</a>
        <a href="https://basketofyegs.com">Basket of YEGs Podcast</a>
    </div>
    <div class="contact">
        <h3>Contact</h3>
        <a href="https://twitter.com/troypavlek">Twitter</a>
        <a href="#">Facebook</a>
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
@endif
</body>
</html>
