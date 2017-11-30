<div class="w-full p-8 mx-auto">
    <a href="{{ $post->getUrl() }}" class="block w-full h-72 lg:flex mx-auto bg-tertiary no-underline">
        @if ($post->img)
            <div class="flex-1 w-72 lg:h-auto flex-none bg-center bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ $post->imgpath }}{{ $post->img }}');"></div>
        @else
            <div class="">BLOG</div>
        @endif
        <div class="p-8 flex flex-col items-center justify-center">
            <div class="leading-loose">
                <h1 class="text-white">{{ $post->title }}</h1>
                <h3 class="text-gold">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</h3>
            </div>
        </div>
    </a>
</div>


