<div class="blog-archive">

    @foreach($posts as $post)
        @if ($loop->index == 0)
            @include('_partials.posts.hero-post', [ "post" => $post])
        @elseif ($loop->index > 0 && $loop->index < 4)
            @include('_partials.posts.sidekick-post', [ "post" => $post])

            @if($loop->index == 3 && $loop->remaining > 0)
                <h1 class="page-title">The Archive</h1>
            @endif
        @else
            @include('_partials.posts.archive-post', [ "post" => $post])
        @endif
    @endforeach

    <div class="center">
        @if ($pagination && $pagination->next)
            <a href="{{ $pagination->next }}" class="button left">
                <i class="fa fa-arrow-left"></i>
                Older Posts
            </a>
            &nbsp;
        @endif
        @if ($pagination && $pagination->previous)
            <a href="{{ $pagination->previous }}" class="button right">
                Newer Posts
                <i class="fa fa-arrow-right"></i>
            </a>
        @endif
    </div>
</div>
