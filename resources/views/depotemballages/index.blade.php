<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex justify-end">
            <button class="bg-green-700 p-2 rounded-lg text-white font-bold hover:bg-green-900"  id="b0" type="submit"><a href="{{ route('depotemballages.create') }}">Ajouter une quantité</a></button>
        </div>
        <hr class="h-1 mt-2 mb-3">
        <h2 class="text-center" >La liste des quantités d'emballage de chaque depot</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                      Depot
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Type_emballage
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Fournisseur
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Quantite_stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Editer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Show
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supprimer
                    </th>
                </tr>
            </thead>
            <tbody>
              @forelse($listedep as $dep)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$dep->depot->designation}}
                    </th>
                    <td class="px-6 py-4">
                        {{$dep->type_emballage->libelle}}
                    </td>
                    <td class="px-6 py-4">
                        {{$dep->fournisseur->nom_fournisseur}}
                    </td>
                    <td class="px-6 py-4">
                        {{$dep->quantite_stock}}
                    </td>
                    <td>
                        <button id="b2"><a href="{{route('depotemballages.edit' ,$dep->id_depotembalfourni)}}"><img src="{{asset('images/msj.jpg')}}" alt="" style="width:50px;"></a></button>
                    </td>
                    <td>
                        <button id="b3"><a href="{{route('depotemballages.show' ,$dep->id_depotembalfourni)}}">Show</a></button>
                    </td>
                    <td>
                        <form action="{{route('depotemballages.destroy',$dep->id_depotembalfourni)}}"  method="post">
                            @csrf
                            @method("DELETE")
                            <button  id="bx" type="submit"><img src="{{asset('images/pb.png')}}" alt="" style="width:50px;"></button>
                        </form>
                    </td>
                </tr>
                @empty
                    Aucun personnel existant
                @endforelse

            </tbody>
        </table>
    </div>
</x-app-layout>

