<div class="-mx-4 lg:-mx-8">
    @foreach($posts as $post)
        @if ($post->slug === $slug)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endif
    @endforeach
</div>
