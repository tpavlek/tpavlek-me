<div class="flex flex-col md:flex-row bg-white rounded my-2 md:m-8 shadow-md lg:w-1/2">
    <div class="w-full h-40 md:h-full md:w-1/3 flex-none bg-cover bg-top md:bg-center overflow-hidden relative" style="background-image:url('{{ $img }}');">
        <div class="hidden md:bloc kw-12 absolute bg-white right-0" style="margin-right: -3rem; height: 150%; transform-origin: center top; transform: rotate(9deg);">
        </div>
    </div>
    <div class="p-4 text-left text-grey-900">
        <h1 class="text-2xl m-0">{{ $name }}</h1>
        <small class="italic">{{ $lower_third }}</small>
        <p class="mt-2 leading-loose">
            {{ $description }}
        </p>
    </div>
</div>
