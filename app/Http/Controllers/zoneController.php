<?php

namespace App\Http\Controllers;

use App\Models\region as ModelsRegion;
use App\Models\zone as ModelsZone;
use Illuminate\Http\Request;

class zoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $zone = ModelsZone::all();
        return view("zone.index",compact("zone"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $region = ModelsRegion::all();
        return view('zone.add', compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $zone = new ModelsZone();
        $zone->id = $request->id;
        $zone->nomz = $request->nomz;
        $zone->localisation = $request->localisation;
        $zone->description = $request->description;
        $zone->region_id = $request->region_id;
        if($zone->save())
            return redirect()->route('zone.index')->with('success','La Zone a ete bien ajoute');
        else  
            return back()->withInput()->with('error','Erreur dans l\'ajout de la Zone'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $zone=ModelsZone::findOrFail($id);
        return view('zone.show',compact('zone'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $zone = ModelsZone::findOrFail($id);
        $region = ModelsRegion::all();
        return view("zone.edit",compact('zone','region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $zone = ModelsZone::findOrFail($id);
        $zone->id = $request->id;
        $zone->nomz = $request->nomz;
        $zone->localisation = $request->localisation;
        $zone->description = $request->description;
        $zone->region_id = $request->region_id;
        if ($zone->update()){
            return redirect()->route('zone.index')
                         ->with('success','la zone a ete modifier avec succes');
        }else{
          return back()->withInput()->with('error','Impossible de modifier la zone'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $zone=ModelsZone::find($id);
        if ($zone == null) {
            return "Cet élément n'a pas été trouvé dans la base de données.";
        } else {
            $zone->delete();
            return redirect()->route("zone.index")->with('success', 'la zone a bien été supprimée');
        }
    }
}
