@extends('_layouts.wrapped')
@section('title', "Sorry you weren't able to contribute")

<h1 style="text-align:center;">Sorry you weren't able to contribute</h1>

<article class="is-centered post">
    <div class="post-content">
        <p>
            If you decide you'd like to donate to help the campaign to reinvigorate City Hall, please come back!
            In the meantime, consider <a href="/subscribe">subscribing</a> to campaign updates.
        </p>

        @include('_partials.contact')

    </div>
</article>
