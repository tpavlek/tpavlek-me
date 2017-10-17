@extends('_layouts.wrapped')
@section('title', 'About Troy Pavlek')

@section('content')
    <h1 style="text-align:center;">About Troy Pavlek</h1>

    <article class="is-centered post">
        <div class="post-content">
            <p>
                Hi, I'm Troy Pavlek.
            </p>
            <p>
                I'm a software developer, podcast host, and former unelectable fringe candidate in the 2017
                Edmonton municipal election.
            </p>

            <p>
                I'm currently the president of the Hazeldean Community League. I also host a <a href="https://basketofyegs.com">podcast</a>,
                maintain a <a href="https://yegvotes.info">site that tracks your city councillors</a> and <a href="/projects">a lot of other things</a>.
            </p>

            <p>
                Sometimes I make some memes.
            </p>

            @include('_partials.posts.post-embed', [ 'slug' => 'adding-some-levity'])
        </div>
    </article>

    @include('_partials.contact')

@stop
