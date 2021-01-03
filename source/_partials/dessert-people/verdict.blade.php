<div class="bg-grey-100 rounded @if (!isset($preserve_margin) || !$preserve_margin) md:-mx-8 @endif @if (!isset($disable_shadow) || !$disable_shadow) shadow-md @endif relative overflow-hidden flex flex-wrap md:divide-x-2 md:divide-grey-400">
    <div class="flex w-full md:w-1/2">
        <div class="w-1/3 flex-none bg-cover bg-top overflow-hidden relative" style="background-image:url('/img/dessert-people/verdict/troy_4_stars.jpg');">
            <div class="w-12 absolute bg-grey-100 right-0" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">

            </div>
        </div>
        <div class="p-4 text-left text-grey-900">
            @include('_partials.stars', [ 'stars' => $troy_stars ])
            <p class="mt-2 leading-loose text-base">
                {{ $troy_verdict }}
            </p>
        </div>
    </div>
    <div class="flex w-full md:w-1/2">
        <div class="p-4 text-left text-grey-900 flex-grow">
            @include('_partials.stars', [ 'stars' => $rhi_stars ])
            <p class="mt-2 leading-loose text-base">
                {{ $rhi_verdict }}
            </p>
        </div>
        <div class="w-1/3 flex-none bg-cover bg-top overflow-hidden relative" style="background-image:url('/img/dessert-people/verdict/rhi_3_stars.jpg');">
            <div class="w-12 absolute bg-grey-100 left-0" style="margin-left: -3rem; height: 150%; transform-origin: center top; transform: rotate(-9deg);">
            </div>
        </div>
    </div>
</div>
