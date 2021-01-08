<div class="flex flex-col md:flex-row mt-8">
    <div class="flex-grow flex flex-col md:flex-row items-center px-4">
        <div markdown="1">
{{ $slot }}
        </div>
    </div>
    <img class="mx-auto text-center mt-4 md:mt-0 {{ isset($photo_classes) ? $photo_classes : '' }}" src="{{ $photo }}" />
</div>