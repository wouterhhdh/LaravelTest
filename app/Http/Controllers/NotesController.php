<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;
use App\Card;



class NotesController extends Controller
{
    
	public function store(Request $request, Card $card){
		$this->validate($request, [
			'body' => 'required'
		]);
		$note = new Note($request->all());
		$note->user_id = 1;


		$card->addNote($note);
		// $note = new Note(['body' => $request->body]);
		// $card->notes()->save($note);
		return back();
	}

	public function edit(Note $note){
		return view('notes.edit', compact('note'));
	}

	public function update(Request $request, Note $note){
		$note->update($request->all());
		return back();
	}
}
