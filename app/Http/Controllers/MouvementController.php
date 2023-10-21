<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\Stock;
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
    $listestoks= Stock::all();
    $mouvement = new Mouvement(); 
    return view('mouvements.create', compact('listestoks', 'mouvement'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id_depsource' => ['required', 'integer', 'different:id_depdestination'],
        'id_depdestination' => ['required', 'integer', 'different:id_depsource'],
        'id_depsource' => [
            'required',
            'integer',
            function ($attribute, $value, $fail) use ($request) {
                $depotSource = Stock::find($value);
                $depotDestination = Stock::find($request->id_depdestination);
        
                if ($depotSource->id_type !== $depotDestination->id_type) {
                    $fail('Le type du dépôt source doit être le même que le type du dépôt de destination.');
                }
            },
        ],
        'quantite_mouvement' => [
            'required',
            'integer',
            function ($attribute, $value, $fail) use ($request) {
                $depotSource = Stock::find($request->id_depsource);
        
                if ($value > $depotSource->quantite_stock) {
                    $fail('La quantité de mouvement ne peut pas être supérieure à la quantité de stock du dépôt source.');
                }
            },
        ],
        

        
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $mouvement = Mouvement::create([
        'id_depsource' => $request->id_depsource,
        'id_depdestination' => $request->id_depdestination,
        'quantite_mouvement' => $request->quantite_mouvement,
        // Ne spécifiez pas de date ici.
    ]);

    $mouvement->depot_source->quantite_stock=$mouvement->depot_source->quantite_stock-$mouvement->quantite_mouvement;
    $mouvement->depot_destination->quantite_stock=$mouvement->depot_destination->quantite_stock+$mouvement->quantite_mouvement;
    
    $mouvement->depot_source->save();
    $mouvement->depot_destination->save();

    // dd($mouvement->depot_source);
    return redirect()->route('mouvements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mouvement $mouvement)
    {
        //
        $listestoks=Stock::all();
        //dd($depot);
        return view('mouvements.show' ,compact('mouvement'))->with('listestoks',$listestoks);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mouvement $mouvement)
    {
        //
        $listestoks=Stock::all();
        //dd($depot);
        return view('mouvements.edit' ,compact('mouvement'))->with('listestoks',$listestoks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mouvement $mouvement)
    {
        //

        $validator = Validator::make($request->all(), [
           
            'quantite_mouvement' => 'required|integer',
            
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $difference=$mouvement->quantite_mouvement-$request->quantite_mouvement;
        $mouvement->id_depsource=$request->id_depsource;
        $mouvement->id_depdestination=$request->id_depdestination;
        $mouvement->quantite_mouvement=$request->quantite_mouvement;

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
    // Récupération de la quantité de mouvement et des dépôts source et de destination
    $quantiteMouvement = $mouvement->quantite_mouvement;
    $depotSource = $mouvement->depot_source;
    $depotDestination = $mouvement->depot_destination;

    // Soustraction de la quantité du dépôt de destination
    $depotDestination->quantite_stock -= $quantiteMouvement;

    // Ajout la même quantité au dépôt source
    $depotSource->quantite_stock += $quantiteMouvement;

    // Sauvegarde des changements
    $depotDestination->save();
    $depotSource->save();

    // Suppression du mouvement
    $mouvement->delete();

    return redirect()->route('mouvements.index');
    }

}
