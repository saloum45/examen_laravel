<?php

namespace App\Http\Controllers;

use App\Models\terrain as  terrainModel;
use App\Models\zone as zoneModel;
use Illuminate\Http\Request;

class terrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $terrain = terrainModel::all();
        return view("terrain.index",compact("terrain"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $zone = zoneModel::all();
        return view("terrain.add",compact("zone"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $terrain = new terrainModel();
        $terrain->id = $request->id;
        $terrain->superficie = $request->superficie;
        $terrain->description = $request->description;
        $terrain->zone_id = $request->zone_id;
        $terrain->save();
        return redirect()->route('terrain.index')->with("success","Ajout éffectué");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $terrain = terrainModel::find($id);
        if ($terrain == null){
            return "id terrain null";
        }else{
            return view("terrain.show", compact("terrain"));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $terrain = terrainModel::find($id);
        $zone = zoneModel::all();
        return view("terrain.edit",compact("terrain","zone"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $terrain = terrainModel::find($id);
        $terrain->id = $request->id;
        $terrain->superficie = $request->superficie;
        $terrain->description = $request->description;
        $terrain->zone_id = $request->zone_id;
        $terrain->update();
        return redirect()->route('terrain.index')->with("success","Térrain modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $terrain = terrainModel::find($id);
        $terrain->delete();
        return redirect()->route('terrain.index')->with("success","Terrain supprimé");
    }
}
