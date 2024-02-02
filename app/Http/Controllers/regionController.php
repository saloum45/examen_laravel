<?php

namespace App\Http\Controllers;

use App\Models\region as  ModelsRegion;
use App\Models\zone as ModelsZone;
use Illuminate\Http\Request;
use Illuminate\View\View;

class regionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $region = ModelsRegion::all();

        return view('region.index', compact('region'));
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
        $region = new ModelsRegion();
        
        $region->nomr = $request->nomr;
        $region->superficie = $request->superficie;

        $region->save();

        return redirect()->route('region.index')->with('success','Region enregistré');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $region = ModelsRegion::findOrFail($id);
        
        return view('region.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $region = ModelsRegion::findOrFail($id);

        return view('region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $region = ModelsRegion::find($id);
        $region->id = $request->id;
        $region->nomr = $request->nomr;
        $region->superficie = $request->superficie;

        $region->update();

        return redirect()->route('region.index')->with('success','Region modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $region = ModelsRegion::find($id);
        $region->delete();

        return redirect()->route('region.index')->with('success','Region supprimé');
    }
}
