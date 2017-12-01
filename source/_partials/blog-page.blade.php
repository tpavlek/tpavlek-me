<div class="w-full mx-auto p-8">

    @foreach($posts as $post)
        @if ($loop->index == 0)
            @include('_partials.posts.hero-post', [ "post" => $post])
        @elseif ($loop->index > 0 && $loop->index < 4)
            @include('_partials.posts.sidekick-post', [ "post" => $post])

            @if($loop->index == 3 && $loop->remaining > 0)
                <h1 class="text-white font-black text-5xl uppercase tracking-wide mb-4">The Archive</h1>
            @endif
        @else
            @include('_partials.posts.archive-post', [ "post" => $post])
        @endif
    @endforeach

    <div class="text-center p-2">
        @if ($pagination && $pagination->next)
            <a href="{{ $pagination->next }}" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-darker">
                <i class="fa fa-arrow-left"></i>
                Older Posts
            </a>
            &nbsp;
        @endif
        @if ($pagination && $pagination->previous)
            <a href="{{ $pagination->previous }}" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-darker">
                Newer Posts
                <i class="fa fa-arrow-right"></i>
            </a>
        @endif
    </div>
</div>
