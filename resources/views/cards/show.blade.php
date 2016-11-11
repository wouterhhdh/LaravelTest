@extends('layout')

@section('content')
	
	<h2> {{ $card->title }}</h2>
		<ul class="list-group">
		@foreach ($card->notes as $note)
			<li class="list-group-item">{{ $note->body }}</li>
		@endforeach
		</ul>
	<hr>
	
	<h3>Add a new note</h3>

	<form method="POST" action="/cards/{{ $card->id }}/notes">
		 {{ csrf_field() }}
		<div class="form-group">
			<textarea name="body" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">add note</button>
		</div>
		
	</form>

@stop