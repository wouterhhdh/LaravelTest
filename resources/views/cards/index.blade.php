@extends('layout')

@section('content')
	<h1>Cards</h1>
	
	@foreach ($cards as $card)
		{{-- expr --}}
		<li> <a href="/cards/{{ $card->id }}">{{ $card->title }}</a> </li>
	@endforeach

@stop