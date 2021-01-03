@extends('_layouts.master')

@section('social_meta')
    @component('_partials.social_meta', [ 'page' => $page ])
        @slot('title', $page->title)
        @slot('description', ($page->description) ? $page->description : "Troy Pavlek - podcaster, software developer, really, really bad election candidate")
        @slot('img', $page->imgpath . $page->img)
    @endcomponent
@stop

@section('body_content')
<div class="px-0 lg:p-8">
    @yield('content')
</div>

@stop
