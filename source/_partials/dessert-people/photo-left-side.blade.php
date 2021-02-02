<div class="flex flex-col md:flex-row mt-8 items-center">
    @if(isset($photo))
        <img class="mx-auto text-center mt-4 md:mt-0 {{ $photo_classes }}" src="{{ $photo }}" />
    @elseif(isset($video))
        @include('_partials.muted-video', [ 'video' => $video, 'video_classes' => $photo_classes ?? '' ])
    @endif
    <div class="flex-grow flex flex-col md:flex-row items-center px-4">
        <div markdown="1">
{{ $slot }}
        </div>
    </div>
</div>
