<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\DepotEmbalageFourni;
use App\Models\Fournisseur;
use App\Models\TypeEmballage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepController extends Controller
{
    /*public function __construct() {
        $this->middleware([
            'auth','role:admin|gerant'
        ]);
    }*/
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        //
        $listedep=DepotEmbalageFourni::all();
        return view('depotemballages.index')->with("listedep",$listedep);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $depots=Depot::all();
        $fournisseurs=Fournisseur::all();
        $typemballages=TypeEmballage::all();
        //dd($fournisseurs);
        return view('depotemballages.create')->with([
            "depots"=>$depots,
            "typemballages"=>$typemballages,
            "fournisseurs"=>$fournisseurs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dump($request->id_depots);
        $validator = Validator::make($request->all(), [
            'quantite_stock' => 'required|integer']);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $dep=DepotEmbalageFourni::create([
            'id_depot'=>$request->id_depot,
            'id_type'=>$request->id_type,
            'id_fournisseur'=>$request->id_fournisseur,
            'quantite_stock'=>$request->quantite_stock,]);
        return redirect()->route('depotemballages.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(DepotEmbalageFourni $depotemballage)
    {
        //
        $depots=Depot::all();
        $fournisseurs=Fournisseur::all();
        $typemballages=TypeEmballage::all();
        return view('depotemballages.show',compact('depotemballage'))->with(
            [
                "depots"=>$depots,
                "typemballages"=>$typemballages,
                "fournisseurs"=>$fournisseurs,
            ]
        );
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DepotEmbalageFourni $depotemballage)
    {
        //
        $depots=Depot::all();
        $fournisseurs=Fournisseur::all();
        $typemballages=TypeEmballage::all();
        return view('depotemballages.edit',compact('depotemballage'))->with([
            "depots"=>$depots,
            "typemballages"=>$typemballages,
            "fournisseurs"=>$fournisseurs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DepotEmbalageFourni $depotemballage)
    {
        //
        $validator = Validator::make($request->all(), [
            'quantite_stock' => 'required|integer']);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $depotemballage->update($request->all());
        return redirect()->route('depotemballages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DepotEmbalageFourni $depotemballage)
    {
        //
        $depotemballage->delete();
        return redirect()->route('depotemballages.index');
    }
}
