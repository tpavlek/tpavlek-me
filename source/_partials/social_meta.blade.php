<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@troypavlek"/>

<meta name="twitter:title" content="{{ $title }}"/>
<meta property="og:title" content="{{ $title }}"/>

<meta name="twitter:description" content="{{ $description }}"/>
<meta property="og:description" content="{{ $description }}"/>

@if($img)
    <meta name="twitter:image" content="{{ $page->baseUrl }}{{ $img }}"/>
    <meta property="og:image" content="{{ $page->baseUrl }}{{ $img }}"/>
@else
    <meta name="twitter:image" content="{{$page->baseUrl}}/img/logo.png"/>
    <meta property="og:image" content="{{$page->baseUrl}}/img/logo.png"/>
@endif

<meta property="og:type" content="article"/>
<meta property="fb:admins" content="551604144"/>
<meta property="fb:app_id" content="691298577729703"/>
