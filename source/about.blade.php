@extends('_layouts.wrapped')
@section('title', 'About Troy Pavlek')

@section('content')
    <h1 class="text-center text-white">About Troy Pavlek</h1>

    <article class="mx-auto bg-white shadow">
        <div class="post-content max-w-5xl text-xl leading-loose mx-auto p-8">
            <p>
                Hi, I'm Troy Pavlek.
            </p>
            <p>
                I'm a software developer, podcast host, and former unelectable fringe candidate in the 2017
                Edmonton municipal election.
            </p>

            <p>
                I currently host a <a href="/speaking-municipally">podcast all about municipal politics</a> in the city
                of Edmonton and do <a href="/projects">a lot of other things</a>.
            </p>

            <p>
                Sometimes I make some memes.
            </p>

            @include('_partials.page.embed', [ 'embed_page' => (object)[
                'url' => '/edmonton-memes',
                'img' => '/img/posts/2017-10-14-adding-some-levity/sweetie-star.jpg',
                'title' => 'Edmonton Memes',
                'sub_title' => 'I make political memes on YouTube sometimes',
                'wrapper_class' => 'shadow-md -mx-4'
            ]])

            @include('_partials.contact')
        </div>
    </article>
@stop
