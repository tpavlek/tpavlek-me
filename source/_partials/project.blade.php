<div class="project-wrapper">
    <div class="project" style="background-image: url('{{ $image }}')">
        <div class="summary-description">
            <div class="leading-normal text-white z-10 absolute bottom-0 left-0 right-0 pb-2">
                <h2 class="text-2xl">
                    {{ $title }}
                </h2>
                <a href="{{ $action_url }}" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-700">
                    {{ $action_name }} <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    @if ($description)
        <div class="bg-white">
            <div class="project-description post-content">
                {{ $description }}
            </div>
        </div>

    @endif
</div>
