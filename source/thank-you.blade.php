@extends('_layouts.wrapped')
@section('title', 'Thank you for donating!')
@section('content')
    <h1 style="text-align:center;">Thank you for donating!</h1>

    <article class="is-centered post">
        <div class="post-content">
            <h3>Thank you for helping Troy Pavlek's campaign in Ward 11!</h3>

            <p>
                Keep in touch and stay updated with the campaign by <a href="/subscribe">subscribing</a>.
            </p>

            @include('_partials.contact')

        </div>
    </article>
@stop
