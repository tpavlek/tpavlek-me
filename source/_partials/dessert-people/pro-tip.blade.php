<div class="flex bg-grey-100 shadow-md rounded-l">
    <div class="p-4 text-left text-grey-900 flex-grow">
        <span class="my-1 uppercase text-base font-black"><i class="fas fa-exclamation-circle"></i> {{ ucfirst($author) }}'s pro tip</span>
        <p class="mt-2 leading-loose text-base" markdown="1">
            {{ $slot }}
        </p>
    </div>
    <div class="w-1/3 flex-none bg-cover bg-top overflow-hidden relative" style="background-image:url('/img/dessert-people/{{ $author }}_pro_tip_{{ (isset($variation) && $variation) ? $variation : "1" }}.jpg');">
        <div class="w-12 absolute bg-grey-100 left-0" style="margin-left: -3rem; height: 150%; transform-origin: center top; transform: rotate(-9deg);">
        </div>
    </div>
</div>
