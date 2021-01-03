<div class="h-32 mb-6 {{ $embed_page->wrapper_class ?? "" }}">
    <a href="{{ $embed_page->url }}" class="block no-underline bg-tertiary hover:bg-tertiary-600 h-full w-full flex flex-col lg:flex-row">
        <div class="w-full lg:w-64 h-full lg:h-auto bg-center bg-cover text-center overflow-hidden" style="background-image: url('{{ $embed_page->img }}');" ></div>
        <div class="p-2 lg:p-8 flex-1 flex flex-col justify-center h-full">
            <div class="leading-loose">
                <h1 class="text-white text-lg lg:text-2xl">{{ $embed_page->title }}</h1>
                <h3 class="text-gold text-sm lg:text-lg">{!! $embed_page->sub_title !!}</h3>
            </div>
        </div>
    </a>
</div>
