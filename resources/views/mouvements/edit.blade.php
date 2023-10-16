<x-app-layout>
    <form action="{{ route('mouvements.update',$mouvement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mt-20" >
            <div class="bg-gray-700 w-100 h-10 text-white "> <h1 class="text-center font-bold p-2 ">Modifiction d'un mouvement</h1></div>
            <hr class="h-1 mt-2 mb-3">
            <div>
                <label for="id_depsource" class="font-bold">Depot_Source</label>
                
                <select name="id_depsource" value="@php if (!empty($mouvement)){echo $mouvement->id_depsource;} @endphp">
                    @foreach ($depot as $depot_emballage_fournisseur)
                        <option value="{{ $depot_emballage_fournisseur->id_depotembalfourni }}" {{ ($depot_emballage_fournisseur->id_depotembalfourni == $mouvement->id_depsource)?"selected":"" }}>{{ $depot_emballage_fournisseur->depot->designation }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="id_depdestination" class="font-bold">Depot_Destination</label>
               
                <select name="id_depdestination" value="@php if (!empty($mouvement)){echo $mouvement->id_depdestination;} @endphp">
                    <option value="">selectionné</option>
                    @foreach ($depot as $depot_emballage_fournisseur)
                        <option value="{{ $depot_emballage_fournisseur->id_depotembalfourni }}" {{ ($depot_emballage_fournisseur->id_depotembalfourni == $mouvement->id_depdestination)?"selected":"" }}>{{ $depot_emballage_fournisseur->depot->designation}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="quantite_sortie" class="font-bold" >Quantite</label>
                <input type="text" name="quantite_sortie" value="@php if (!empty($mouvement)){echo $mouvement->quantite_sortie;} @endphp"/>
            </div>
            <div>
                <label for="date" class="font-bold">Date</label>
                <input type="text" name="date" value="@php if (!empty($mouvement)){echo $mouvement->date;} @endphp"/>
            </div>
            <button type="submit">Enregistrer</button>
        </div>    
    </form>
</x-app-layout>