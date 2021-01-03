<span>
@for($i=0; $i < 5; $i++)
    @if($stars > $i)
        &#9733;
    @else
        &#9734;
    @endif
@endfor
</span>
