<div class="bg-grey-100 shadow-md rounded md:-mx-8">
    <div class="p-4" markdown="1">
{{ $slot }}
    </div>
    <div class="flex @if(isset($stacked) && $stacked) flex-col @endif items-center justify-center px-4 pb-4">
        @foreach ($photos as $photo)
            <div class="@if (count($photos) == 2)w-1/2 @endif">
                <img class="" src="{{ $photo }}" />
            </div>
        @endforeach
    </div>
</div>
