@if (isset($caption) && $caption)
    <figure class="bg-orange-lightest p-8 shadow border-2 border-orange-lighter text-center mb-2" @if(isset($inline) && $inline) style="display: inline;" @endif>
        <img src="{{ $page->imgpath }}{{$name}}"/>
        <figcaption class="text-center">{!! (new Parsedown())->parse($caption) !!}</figcaption>
    </figure>
@else
    <img src="{{$page->imgpath}}{{$name}}" @if(isset($inline) && $inline) style="display:inline;" @endif />
@endif
