<article class="bg-white mb-8">
    <header class="summary-block w-full mb-8 h-68 relative bg-cover bg-center" style="background-image: url('{{ $img }}');">
        <div class="summary-description">
            <div class="leading-normal z-10 absolute pin-b pin-l pin-r pb-2">
                <h1 class="text-white text-5xl">{{ $title }}</h1>
                @if (isset($date))
                    <h3 class="text-gold text-2xl">{{ (new \Carbon\Carbon($date))->format("F jS, Y") }}</h3>
                @endif
            </div>
        </div>

    </header>
    <div class="post-content max-w-xl mx-auto text-xl leading-loose p-8">
        {!! (isset($slot)) ? (new Parsedown())->parse($slot) : '' !!}
        @yield('post_content', '')
    </div>
</article>
