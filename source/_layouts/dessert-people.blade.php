@php
    $page->nav_color_class = "bg-red-900";
    $page->body_color_class = "bg-red-700";
@endphp

@extends("_layouts.wrapped")

@section('body_content')
    @yield('content')
@endsection
