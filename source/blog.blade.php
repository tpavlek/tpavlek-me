---
extends: "_layouts.wrapped"
title: Posts Archive
pagination:
    collection: posts
    perPage: 10
---

<div class="blog-archive">
    <h1 class="page-title" style="visibility: hidden;">THE BLOG</h1>
    @foreach($pagination->items as $post)
        @if ($loop->index == 0)
            @include('_partials.posts.hero-post', [ "post" => $post])
        @elseif ($loop->index == 1)
            @include('_partials.posts.sidekick-post', [ "post" => $post])
        @elseif ($loop->index == 2)
            @include('_partials.posts.sidekick-post', [ "post" => $post])
            @include('_partials.posts.links-post')
            <h1 class="page-title">The Archive</h1>
        @else
            @include('_partials.posts.archive-post', [ "post" => $post])
        @endif
    @endforeach

    <nav class="post-controls">
        @if ($pagination->next)
            <a href="{{ $pagination->next }}" class="button left">
                <i class="fa fa-arrow-left"></i>
                Older Posts
            </a>
        @endif
        @if ($pagination->previous)
            <a href="{{ $pagination->previous }}" class="button right">
                Newer Posts
                <i class="fa fa-arrow-right"></i>
            </a>
        @endif
    </nav>
</div>
