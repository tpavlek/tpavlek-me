<div class="shadow-md">
    <header class="summary-block w-full h-48 relative bg-cover bg-center" style="background-image: url('{{ $post->imgpath . $post->img }}');">
        <div class="summary-description">
            <div class="leading-normal z-10 absolute bottom-0 left-0 right-0 pb-2">
                <h1 class="text-white text-2xl">{{ $post->title }}</h1>
                <h3 class="text-gold text-xl">{{ (new \Carbon\Carbon($post->date))->format("F jS, Y") }}</h3>
            </div>
        </div>
    </header>
    @foreach($post->verdicts as $verdict)
    @component('_partials.dessert-people.verdict', ['preserve_margin' => true, 'disable_shadow' => true ])

        @slot('troy_stars', $verdict['troy']['stars'])
        @slot('troy_verdict', $verdict['troy']['verdict'])
        @slot('rhi_stars', $verdict['rhi']['stars'])
        @slot('rhi_verdict', $verdict['rhi']['verdict'])

    @endcomponent
    @endforeach
</div>

