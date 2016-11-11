@extends('layout')

@section('content')
	<h1>Cards</h1>
	
	@foreach ($cards as $card)
		{{-- expr --}}
		<li> {{ $card->title }} </li>
	@endforeach

@stop