<div class="h-96 mb-6">
    <a href="{{ $post->getUrl() }}" class="block no-underline bg-tertiary rounded-r-xl h-full w-full flex flex-col lg:flex-row">
        <div class="w-full lg:w-5/12 h-32 lg:h-auto bg-center bg-cover text-center overflow-hidden" @if($post->img) style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');" @else style="background-image: url('/img/blog-img.png');" @endif></div>
        <div class="p-2 lg:p-8 flex-1 flex flex-col justify-center h-full">
            <div class="leading-loose">
                <h1 class="text-xl lg:text-2xl font-bold text-white">{{ $post->title }}</h1>
                <h3 class="text-normal text-gold">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</h3>
            </div>
        </div>
    </a>
</div>

