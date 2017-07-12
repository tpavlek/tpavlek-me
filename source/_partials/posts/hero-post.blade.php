<a href="{{ $post->getUrl() }}"class="hero-post">
    @if ($post->img)
        <div class="img" style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');"></div>
    @else
        <div class="img default">BLOG</div>
    @endif
    <div class="valign-wrapper text-container">
        <div class="text">
            <span class="title">{{ $post->title }}</span>
            <span class="date">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</span>
        </div>
    </div>
</a>

