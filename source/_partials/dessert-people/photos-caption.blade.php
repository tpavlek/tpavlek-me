<div class="bg-grey-100 shadow-md rounded md:-mx-8">
    <div class="p-4" markdown="1">
{{ $slot }}
    </div>
    <div class="flex @if(isset($stacked) && $stacked) flex-col @endif items-center justify-center px-4 pb-4">
        @foreach ($photos as $photo)
            <img class="@if (count($photos) == 2)w-1/2 @endif" src="{{ $photo }}" />
        @endforeach
    </div>
</div>
