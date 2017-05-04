<a href="{{ $post->getUrl() }}" class="sidekick-post">
    <div class="img" @if($post->img) style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');" @else style="background-image: url('/img/blog-img.png');" @endif></div>
    <div class="text">
        <h1 class="title">{{ $post->title }}</h1>
        <h2 class="date">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</h2>
    </div>
</a>
