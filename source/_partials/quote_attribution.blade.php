<div class="bg-grey-lightest rounded md:-mx-8 shadow-md relative overflow-hidden">
    <div class="absolute pin-l pin-t md:mt-0 mt-8 mt-16 md:opacity-50 opacity-30 text-grey-light md:leading-tight leading-normal" style="font-size:6em; font-family: Georgia, serif;">&ldquo;</div>
    <div class=" text-left text-grey-darkest">
        <div class="md:float-right md:w-1/4 md:h-64 h-24 w-full relative">
            <div class="w-full h-full flex-none bg-cover bg-top overflow-hidden relative" style="background-image:url('{{ $img }}');">
                <div class="md:block hidden w-16 absolute bg-grey-lightest pin-l -my-2" style="height: 150%; transform-origin: center top; transform: rotate(9deg);">

                </div>
            </div>
        </div>
        <div class="leading-loose pl-6 pt-8" style="margin:0;">
            {!! (isset($slot)) ? (new Parsedown())->parse($slot) : '' !!}
        </div>
        <div class="text-right italic text-grey pr-4 pb-4">
            - {{ $attribution }}
        </div>

    </div>

</div>
