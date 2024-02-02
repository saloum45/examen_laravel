<?php

namespace App\Http\Controllers;

use App\Models\promoteur as ModelsPromoteur;
use Illuminate\Http\Request;

class promoteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $promoteur = ModelsPromoteur::all();
        return view("promoteur.index", compact("promoteur"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $promoteur = new  ModelsPromoteur();
        $promoteur->id = $request->id;
        $promoteur->nomp = $request->nomp;
        $promoteur->tel = $request->tel;
        $promoteur->email = $request->email;
        $promoteur->bp = $request->bp;
        $promoteur->save();
        return redirect()->route("promoteur.index")->with("success", "Ajout réussi");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $promoteur = ModelsPromoteur::find($id);
        if ($promoteur == null) {
            return "erreur";
        } // si l'id n'existe pas on renvoie une erreur
        else {
            return view('promoteur.show', compact('promoteur'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $promoteur = ModelsPromoteur::find($id);
        if ($promoteur == null) {
            return "Erreur cette page n'exsite pas";
        } else {
            return view('promoteur.edit', compact('promoteur'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $promoteur =  ModelsPromoteur::find($id);
        $promoteur->id = $request->id;
        $promoteur->nomp = $request->nomp;
        $promoteur->tel = $request->tel;
        $promoteur->email = $request->email;
        $promoteur->bp = $request->bp;
        $promoteur->update();
        return redirect()->route("promoteur.index")->with("success", "le promoteur a été modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $promoteur = ModelsPromoteur::find($id);
        if ($promoteur == null) {
            return "Cet élément n'a pas été trouvé dans la base de données.";
        } else {
            $promoteur->delete();
            return redirect()->route("promoteur.index")->with('success', 'le promoteur a bien été supprimé');
        }
    }
}
