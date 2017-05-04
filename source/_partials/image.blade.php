@if (isset($caption) && $caption)
    <figure @if(isset($inline) && $inline) style="display: inline;" @endif>
        <img src="{{ $page->imgpath }}{{$name}}"/>
        <figcaption>{!! (new Parsedown())->parse($caption) !!}</figcaption>
    </figure>
@else
    <img src="{{$page->imgpath}}{{$name}}" @if(isset($inline) && $inline) style="display:inline;" @endif />
@endif
