<?php

namespace App\Http\Controllers;
use App\Models\Depot;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $listePersonnel=Personnel::all();
        // return view('personnelVue.index')->with("listePersonnel",$listePersonnel);
        $listePersonnel = Personnel::all();
        return view('personnels.index', compact('listePersonnel'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return view('personnelVue.create');
        $id_depot=Depot::all();
        //dump($id_depot);
        return view('personnels.create')->with("id_depot",$id_depot);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|min:3|max:255',
            'prenom' => 'required|string|min:3|max:255',
            'sexe' => 'required|string|max:255',
            'adresse'=> 'required|string|max:255',
           
        ]);
        $rules = [
            'contact' => 'required|custom_contact_rule',
        ];

        $messages = [
            'custom_contact_rule' => 'Le contact est invalide.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //Creation d'une instance de resta
        $personnel=Personnel::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'sexe'=>$request->sexe,
            'contact'=>$request->contact,
            'adresse'=>$request->adresse,
            'id_depot'=>$request->id_depot,
        ]);
        //echo 'enrégistrement réussi';
        return redirect()->route('personnels.index');

    }

    /**
     * Display the specified resource
     */
    public function show(Personnel $personnel)
    {
        //
        $id_depot=Depot::all();
        return view('personnels.show',compact('personnel'))->with("id_depot",$id_depot);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personnel $personnel)
    {
        //
        $id_depot=Depot::all();
        return view('personnels.edit',compact('personnel'))->with("id_depot",$id_depot);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personnel $personnel)
    {
        //
        $validator = Validator::make($request->all(), [

            'nom' => 'required|alpha|min:3|max:255',
            'prenom' => 'required|alpha|min:3|max:255',
            'sexe' => 'required|alpha|max:255',
            'adresse'=> 'required|string|max:255',
            
        ]);

        $rules = [
            'contact' => 'required|custom_contact_rule',
        ];

        $messages = [
            'custom_contact_rule' => 'Le format du contact est incorrect.',
        ];

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $personnel->update($request->all());
        return redirect()->route('personnels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        //
        $personnel->delete();
        return redirect()->route('personnels.index');
    }
}
