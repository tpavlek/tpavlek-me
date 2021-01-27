@foreach ($verdicts as $recipe => $verdict)
@if ($loop->count == 1)
<h3 class="text-center font-black text-2xl text-red-900">The Verdict</h3>
@else
<h3 class="text-center font-black text-2xl text-red-900">{{ $recipe }}</h3>
@endif

@component('_partials.dessert-people.verdict')

@slot('troy_stars', $verdict['troy']['stars'])
@slot('troy_verdict', $verdict['troy']['verdict'])
@slot('rhi_stars', $verdict['rhi']['stars'])
@slot('rhi_verdict', $verdict['rhi']['verdict'])

@endcomponent
@endforeach
