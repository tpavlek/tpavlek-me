---
extends: "_layouts.wrapped"
title: Posts Archive
pagination:
    collection: posts
    perPage: 10
---

@section('content')

@include('_partials.blog-page', [ 'posts' => $pagination->items, 'pagination' => $pagination ])

@stop
