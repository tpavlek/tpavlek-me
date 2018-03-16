@extends('_layouts.master')

@section('social_meta')
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="{{ $page->title }}"/>
    <meta property="og:title" content="{{ $page->title }}"/>

    @if($page->description)
        <meta property="og:description" content="{{ $page->description }}"/>
    @else
        <meta property="og:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
    @endif

    @if ($page->imgpath && $page->img)
        <meta property="og:image" content="{{ $page->baseUrl }}{{$page->imgpath}}{{$page->img}}"/>
    @else
        <meta property="og:image" content="{{ $page->baseUrl }}/img/splash-banner-bg.jpg"/>
    @endif


    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
@stop

@section('body_content')
<div class="p-8">
    @yield('content')
</div>

@stop
