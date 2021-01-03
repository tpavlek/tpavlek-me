<div class="bg-yellow-100 mx-auto max-w-2xl shadow-lg rounded-lg overflow-hidden">
    <div class="sm:flex sm:items-center px-6 py-4">
        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="/img/cropped-profile.jpg" alt="">
        <div class="text-center sm:text-left sm:flex-grow">
            <div class="mb-4">
                <p class="text-xl leading-tight">Troy Pavlek</p>
                <p class="text-sm leading-tight text-grey-600">Contact me</p>
            </div>
            <div>
                @if ($page->email)
                    <a
                            class="no-underline ml-2 text-xs font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-gold text-gold hover:bg-gold hover:text-white"
                            href="mailto:{{ $page->email }}"
                    >
                        <i class="fa fa-envelope"></i> Email
                    </a>
                @endif

                @if ($page->twitter_url)
                    <a
                            class="no-underline ml-2 text-xs font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-gold text-gold hover:bg-gold hover:text-white"
                            href="{{ $page->twitter_url }}"
                    >
                        <i class="fa fa-twitter-square"></i> @troypavlek
                    </a>
                @endif
                @if ($page->facebook_url)
                    <a
                            class="no-underline ml-2 text-xs font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-gold text-gold hover:bg-gold hover:text-white"
                            href="{{ $page->facebook_url }}"
                    >
                        <i class="fa fa-facebook-square"></i> Facebook
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
