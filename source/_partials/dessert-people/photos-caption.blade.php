<div class="bg-grey-100 shadow-md rounded md:-mx-8">
    @if(isset($slot) && $slot)
    <div class="p-4" markdown="1">
{{ $slot }}
    </div>
    @endif
    <div class="flex @if(isset($stacked) && $stacked) flex-col @endif items-center justify-center px-4 pb-4">
        @foreach ($photos as $photo)
            <div class="@if (count($photos) == 1)w-full @else w-1/{{count($photos)}}@endif">
                <img class="" src="{{ $photo }}" />
            </div>
        @endforeach
    </div>
</div>
