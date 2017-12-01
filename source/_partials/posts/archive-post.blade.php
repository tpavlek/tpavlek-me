<div class="h-32 mb-6">
    <a href="{{ $post->getUrl() }}" class="block no-underline bg-tertiary h-full w-full flex">
        <div class="w-72 lg:h-auto bg-center bg-cover text-center overflow-hidden" @if($post->img) style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');" @else style="background-image: url('/img/blog-img.png');" @endif></div>
        <div class="p-8 flex-1 flex flex-col justify-center h-full">
            <div class="leading-loose">
                <h1 class="text-white text-2xl">{{ $post->title }}</h1>
                <h3 class="text-gold text-lg">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</h3>
            </div>
        </div>
    </a>
</div>
