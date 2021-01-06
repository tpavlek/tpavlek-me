<span>
@for($i=0; $i < 5; $i++)
        @if ($stars - 0.5 == $i)
            <i class="fas fa-star-half-alt"></i>
        @elseif($stars > $i)
            <i class="fas fa-star"></i>
        @else
            <i class="far fa-star"></i>
        @endif
    @endfor
</span>
