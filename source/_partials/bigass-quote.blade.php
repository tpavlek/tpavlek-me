<div class="opacity-50 text-grey-500 relative text-center flex items-center my-4">
    <div class="absolute left-0 top-0 md:opacity-50 opacity-30 text-grey-300 h-full" style="font-size:7rem; font-family: Georgia, serif;">@if(isset($no_quotes) && $no_quotes)@else&ldquo;@endif</div>
    <span class="text-6xl flex-grow italic font-serif">{{ $slot }}</span>
    <div class="absolute flex items-end right-0 bottom-0 md:opacity-50 opacity-30 text-grey-300 h-full" style="font-size: 7rem; font-family: Georgia, serif;">@if(isset($no_quotes) && $no_quotes)@else&bdquo;@endif</div>
</div>

