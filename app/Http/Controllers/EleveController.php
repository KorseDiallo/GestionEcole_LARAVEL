<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $eleves= Eleve::all();
    //    dd($eleves);
       return view("Eleves.listeEleve",[
        "eleves"=>$eleves
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Eleves.ajoutEleve");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation des donnée avant insertion dans la base de donnée
        $regles = [
            'matEleve' => 'required|unique:eleves,matricule',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'classe' => 'required|string|max:255',
            'dateNaiss' => 'required|date',
            'sexe' => 'required|in:masculin,feminin',
        ];
        $request->validate($regles);

        $eleve= new Eleve();
        $eleve->matricule=$request->matEleve;
        $eleve->nomEleve=$request->nom;
        $eleve->prenomEleve=$request->prenom;
        $eleve->classe=$request->classe;
        $eleve->date_de_naissance=$request->dateNaiss;
        $eleve->genre=$request->sexe;

        
        if ($eleve->save()) {
            return redirect()->route('Eleves.listeEleve');
        }
        
           
    

    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        
       return view("Eleves.showEleve",compact("eleve"));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        // dd($eleve);
        return view("Eleves.modifierEleve",compact("eleve"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'classe' => 'required|string|max:255',
            'dateNaiss' => 'required|date',
            'sexe' => 'required|in:masculin,féminin',
        ]);

        $eleve->nomEleve=$request->nom;
        $eleve->prenomEleve=$request->prenom;
        $eleve->classe=$request->classe;
        $eleve->date_de_naissance=$request->dateNaiss;
        $eleve->genre=$request->sexe;

        if($eleve->update()){
             return redirect()->route("Eleves.listeEleve");
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route("Eleves.listeEleve");
    }
}
