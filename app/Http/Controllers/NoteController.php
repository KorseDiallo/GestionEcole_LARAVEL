<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $idEleve=$id;
        return view("Notes.ajoutNote",compact("idEleve"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            "matiere"=> "required",
            "note"=> "required"
        ]);
        
        $note= new Note();
        $note->matiere=$request->matiere;
        $note->note=$request->note;
        $note->eleve_id=$id;

        $note->save();
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
