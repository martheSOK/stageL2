<x-app-layout>
<form action="{{route ('depotemballages.update' , $depotemballage->id_depotembalfourni) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-20">
        <div class="bg-gray-700 w-100 h-10 text-white "> <h1 class="text-center font-bold p-2 ">Modification d'une quantite</h1></div>
        <hr class="h-1 mt-2 mb-3">
        <div class="enf1">
            <label for="id_depot">Depot</label>
            <select name="id_depot" value="@php if (!empty($depotemballage)){echo $depotemballage->id_depots;} @endphp">
                    @foreach ($depots as $d)
                    <option value="{{ $d->id_depot }}" {{ ($d->id_depot == $depotemballage->id_depot)?"selected":"" }}>{{ $d->designation }}</option>
                @endforeach
                   
            </select>
        </div>
        <div class="enf2">
            <label for="id_type">TypeEmballage</label>
            <select name="id_type" value="@php if (!empty($depotemballage)){echo $depotemballage->id_type;} @endphp">
                <!-- <option value="">selectionné</option> -->
                    @foreach ($typemballages as $t)
                    <option value="{{ $t->id_type }}" {{ ($t->id_type  == $depotemballage->id_type)?"selected":"" }}>{{ $t->libelle }}</option>
                @endforeach
                    
            </select>
        </div>
        <div class="enf3">
            <label for="id_fournisseur">Fournisseur</label>
            <select name="id_fournisseur" value="@php if (!empty($depotemballage)){echo $depotemballage->id_fournisseur;} @endphp">
                <!-- <option value="">selectionné</option> -->
                    @foreach ($fournisseurs as $f)
                        <option value="{{ $f->id_fournisseur }}" {{ ($f->id_fournisseur == $depotemballage->id_fournisseur)?"selected":"" }}>{{ $f->nom_fournisseur }}</option>
                    @endforeach
                    
            </select>
        </div>
        <div class="enf4">
            <label for="quantite_stock">Quantite_stock</label>
            <input type="text" name="quantite_stock" value="@php if (!empty($depotemballage)){echo $depotemballage->quantite_stock;} @endphp"/><br>
        </div>
        <button id="b1" type="submit">Enregistrer</button>
    </div>  
</form>
</x-app-layout>
