<a href="{{ $post->getUrl() }}" class="archive-post">
    @if($post->img)
        <div class="img" style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');"></div>
    @else
        <div class="img default">
            BLOG
        </div>
    @endif
    <div class="text">
        <h1 class="title">{{ $post->title }}</h1>
        <h2 class="date">{{ ( new \Carbon\Carbon($post->date))->format("F jS, Y") }}</h2>
    </div>
</a>
