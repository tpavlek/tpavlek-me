<a href="{{ $post->getUrl() }}" class="sidekick-post">
    <div class="img" @if($post->img) style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');" @else style="background-image: url('/img/blog-img.png');" @endif></div>
    <div class="valign-wrapper text-container">
        <div class="text">
            <span class="title">{{ $post->title }}</span>
            <span class="date">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</span>
        </div>
    </div>

</a>
