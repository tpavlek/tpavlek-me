@extends('_layouts.wrapped')
@section('title', 'Troy in the Media')

@section('content')

    <div id="bingo">
        <h1 class="text-center text-white mb-4">#AbLeg Bingo</h1>
        <div class="max-w-lg mx-auto">
            <ableg-bingo></ableg-bingo>

            <div class="post-content text-white mt-2 text-sm text-center mx-auto">Made with ❤ by <a href="https://twitter.com/troypavlek">Troy Pavlek</a> (Tweet me new spaces to add!)</div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        let vue = new window.Vue({
            'el': '#bingo',
        })
    </script>
@stop

