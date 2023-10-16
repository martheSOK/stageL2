<x-app-layout>
    <form action="{{ route('mouvements.store') }}" method="post">
        @csrf
        <div class="mt-20" >
            <div class="bg-gray-700 w-100 h-10 text-white "> <h1 class="text-center font-bold p-2 ">Affichage d'un mouvement</h1></div>
            <hr class="h-1 mt-2 mb-3">
            <div>
                <label for="id_depsource" class="font-bold">Depot_Source</label>
                <!-- <option value="">selectionné</option> -->
                <select name="id_depsource" value="@php if (!empty($mouvement)){echo $mouvement->id_depsource;} @endphp" disabled>
                    @foreach ($depot as $d)
                        <option value="{{ $d->id_depotembalfourni }}">{{ $d->id_depotembalfourni }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="id_depdestination" class="font-bold">Depot_Destination</label>
                <!-- <option value="">selectionné</option> -->
                <select name="id_depdestination" value="@php if (!empty($mouvement)){echo $mouvement->id_depdestination;} @endphp" disabled>
                    @foreach ($depot as $d)
                        <option value="{{ $d->id_depotembalfourni }}">{{ $d->id_depotembalfourni }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="quantite_sortie" class="font-bold" >Quantite</label>
                <input type="text" name="quantite_sortie" value="@php if (!empty($mouvement)){echo $mouvement->quantite_sortie;} @endphp" disabled/>
            </div>
            <div>
                <label for="date" class="font-bold">Date</label>
                <input type="text" name="date" value="@php if (!empty($mouvement)){echo $mouvement->date;} @endphp" disabled/>
            </div>
            <button id="b1" type="submit"><a href="{{ route('mouvements.index') }}">Quiter</a></button>
        </div>    
    </form>
</x-app-layout>