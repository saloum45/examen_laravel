<?php

namespace App\Http\Controllers;

use App\Models\lignePromoteur as ModelsLignePromoteur;
use App\Models\promoteur as ModelsPromoteur;
use App\Models\terrain as ModelsTerrain;
use Illuminate\Http\Request;

class lignePromoteur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lignePromoteur = ModelsLignePromoteur::all();
        return view("lignePromoteur.index",compact("lignePromoteur"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $terrain = ModelsTerrain::all();
        $promoteur = ModelsPromoteur::all();
        return view("lignePromoteur.add", compact("terrain","promoteur"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $lignePromoteur = new ModelsLignePromoteur();
        $lignePromoteur->id = $request->id;
        $lignePromoteur->terrain_id=$request->terrain_id;
        $lignePromoteur->promoteur_id=$request->promoteur_id;
        $lignePromoteur->dateDebut = $request->dateDebut;
        $lignePromoteur->dateFin = $request->dateFin;
        $lignePromoteur->prix = $request->prix;
        $lignePromoteur->save();
        return redirect()->route('lignePromoteur.index')->with('success','Ajout réussi');
        // else
        //     return back()->withInput()->withErrors(['Erreur de sauvegarde']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $lignePromoteur=ModelsLignePromoteur::find($id);
        if (is_null($lignePromoteur)) 
            abort(404);
        
        return view("lignePromoteur.show",compact("lignePromoteur"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $lignePromoteur =  ModelsLignePromoteur::find($id);
		$lesTerrains = ModelsTerrain::all();
		$lesPromoteurs = ModelsPromoteur::all();
        if (is_null($lignePromoteur))  
            abort(404);
            
        return view("lignePromoteur.edit", compact("lignePromoteur","lesTerrains","lesPromoteurs") );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $lignePromoteur = ModelsLignePromoteur::find($id);
        $lignePromoteur->terrain_id = $request->terrain_id;
        $lignePromoteur->promoteur_id = $request->promoteur_id;
        $lignePromoteur->dateDebut = $request->dateDebut;
        $lignePromoteur->dateFin = $request->dateFin;
        $lignePromoteur->prix = $request->prix;
        $lignePromoteur->update();
        return redirect("lignePromoteur.index")->with("success","Modificateion réussi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $lignePromoteur= ModelsLignePromoteur::find($id);
        $lignePromoteur->delete();
        return redirect("lignePromoteur.index")->with("success","Suppression effectuée");
    }
}
