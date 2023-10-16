<?php

namespace App\Http\Controllers;

use App\Models\ConsignationFournisseur;
use App\Models\Fournisseur;
use App\Models\TypeEmballage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConsignationFourniController extends Controller
{
    /*public function __construct() {
        $this->middleware([
            'auth','role:admin|gerant'
        ]);
    }*/
    /**
     * Display a listing of the resource.
     */
   
        //
    public function index()
    {
        $listconsignationfournisseurs = ConsignationFournisseur::all();
        return view('consignationfournisseurs.create', compact('listconsignationfournisseurs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        $fournisseurs=Fournisseur::all();
        $typemballages=TypeEmballage::all();
        //dd($fournisseurs);
        return view('consignationfournisseurs.index')->with([
        
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
            'quantite_consigne' => 'required|integer']);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $dep=ConsignationFournisseur::create([
            'id_type'=>$request->id_type_emballage,
            'id_fournisseur'=>$request->id_fournisseur,
            'quantite_consigne'=>$request->quantite_consigne,]);
        return redirect()->route('consignationfournisseurs.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(ConsignationFournisseur $consignationfournisseur)
    {
        //
        
        $fournisseurs=Fournisseur::all();
        $typemballages=TypeEmballage::all();
        return view('consignationfournisseurs.show',compact('consignationfournisseur'))->with(
            [
                "typemballages"=>$typemballages,
                "fournisseurs"=>$fournisseurs,
            ]
        );
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConsignationFournisseur $consignationfournisseur)
    {
        //
       
        $fournisseurs=Fournisseur::all();
        $typemballages=TypeEmballage::all();
        return view('consignationfournisseurs.edit',compact('consignationfournisseur'))->with([
            
            "typemballages"=>$typemballages,
            "fournisseurs"=>$fournisseurs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConsignationFournisseur $consignationfournisseur)
    {
        //s
        $validator = Validator::make($request->all(), [
            'quantite_stock' => 'required|integer']);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $consignationfournisseur->update($request->all());
        return redirect()->route('consignationfournisseurs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsignationFournisseur $consignationfournisseur)
    {
        //
        $consignationfournisseur->delete();
        return redirect()->route('consignationfournisseurs.index');
    }
}
