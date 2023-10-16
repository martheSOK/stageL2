<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\DepotEmbalageFourni;
use App\Models\Mouvement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MouvementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         
        $listmouvement=Mouvement::all();
        //$date=DB::table('mouvements')->select('created_at')->last();
        return view('mouvements.index',compact('listmouvement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $depot_emballage_fournisseurs = DepotEmbalageFourni::all();
    $mouvement = new Mouvement(); 
    return view('mouvements.create', compact('depot_emballage_fournisseurs', 'mouvement'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'quantite_sortie' => 'required|integer',
        
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $mouvement = Mouvement::create([
        'id_depsource' => $request->id_depsource,
        'id_depdestination' => $request->id_depdestination,
        'quantite_sortie' => $request->quantite_sortie,
        // Ne spécifiez pas de date ici.
    ]);

    return redirect()->route('mouvements.index');


    $mouvement->depot_source->quantite_stock=$mouvement->depot_source->quantite_stock-$mouvement->quantite_sortie;
    $mouvement->depot_destination->quantite_stock=$mouvement->depot_destination->quantite_stock+$mouvement->quantite_sortie;
    
    $mouvement->depot_source->save();
    $mouvement->depot_destination->save();
        return redirect()->route('mouvements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mouvement $mouvement)
    {
        //
        $depot=DepotEmbalageFourni::all();
        //dd($depot);
        return view('mouvements.show' ,compact('mouvement'))->with('depot',$depot);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mouvement $mouvement)
    {
        //
        $depot=DepotEmbalageFourni::all();
        //dd($depot);
        return view('mouvements.edit' ,compact('mouvement'))->with('depot',$depot);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mouvement $mouvement)
    {
        //

        $validator = Validator::make($request->all(), [
           
            'quantite_sortie' => 'required|integer',
            
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $difference=$mouvement->quantite_sortie-$request->quantite_sortie;
        $mouvement->id_depsource=$request->id_depsource;
        $mouvement->id_depdestination=$request->id_depdestination;
        $mouvement->quantite_sortie=$request->quantite_sortie;

        $mouvement->save();

        $mouvement->depot_source->quantite_stock=$mouvement->depot_source->quantite_stock+$difference;
        $mouvement->depot_destination->quantite_stock=$mouvement->depot_destination->quantite_stock-$difference;
        
        $mouvement->depot_source->save();
        $mouvement->depot_destination->save();
        return redirect()->route('mouvements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mouvement $mouvement)
    {
        //

        $mouvement->delete();
        return redirect()->route('mouvements.index');
    }
}
