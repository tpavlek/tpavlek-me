<div class="flex flex-col md:flex-row mt-8 items-center">
    <img class="mx-auto text-center mt-4 md:mt-0 {{ $photo_classes }}" src="{{ $photo }}" />
    <div class="flex-grow flex flex-col md:flex-row items-center px-4">
        <div markdown="1">
{{ $slot }}
        </div>
    </div>
</div>
