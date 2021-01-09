@extends('_layouts.dessert-people')

@section('title', $page->title)

@section('content')
    <div class="mx-auto px-0 py-1 lg:p-8">

        @include('_partials.posts.post-body', [ 'img' => $page->imgpath.$page->img, 'title' => $page->title, 'date' => $page->date, 'photo_credit' => $page->photo_credit ])

        <div class="blog-archive">
            @if($page->getNext())
                <h1 class="text-white my-4">Next Post</h1>
                @include('_partials.posts.archive-post', [ 'post' => $page->getNext() ])
            @endif
            @if ($page->getPrevious())
                <h1 class="text-white my-4">Previous Post</h1>
                @include('_partials.posts.archive-post', [ 'post' => $page->getPrevious() ])
            @endif
        </div>
    </div>
@endsection

@section('social_meta')
    @component('_partials.social_meta', [ 'page' => $page ])
        @slot('title', $page->title)
        @slot('description', ($page->description) ? $page->description : "Troy Pavlek - podcaster, software developer, really, really bad election candidate")
        @slot('img', $page->imgpath . $page->img)
    @endcomponent
@endsection
