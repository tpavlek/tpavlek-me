@extends('_layouts.wrapped')
@section('title', 'Subscribe to Campaign Updates')
@section('content')

    <h1 style="text-align:center;">Subscribe to Campaign Updates!</h1>

    <article class="is-centered post">
        <div class="post-content">
            <p>
                If you're interested in staying updated with the campaign or helping out in anyway, a great first step
                is subscribing to
                updates!
            </p>
            <p class="is-centered">
                <a href="http://eepurl.com/ccFea9" class="button button-lg"><i class="fa fa-envelope"></i> Subscribe to
                    the Mailing List</a>
            </p>
        </div>
    </article>

    <div class="center">
        @include('_partials.contact')
    </div>

@stop
