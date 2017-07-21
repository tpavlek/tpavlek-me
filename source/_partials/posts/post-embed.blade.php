<div class="blog-archive">
    @foreach($posts as $post)
        @if ($post->slug === $slug)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endif
    @endforeach
</div>
