---
extends: "_layouts.wrapped"
title: Frequently Asked Questions
pagination:
    collection: questions
---

@section('content')

<div class="blog-archive">
    @foreach($pagination->items as $question)
        {{ $question }}
    @endforeach
</div>

@stop
