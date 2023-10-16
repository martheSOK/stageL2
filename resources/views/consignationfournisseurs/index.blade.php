<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex justify-end">
            <button class="bg-green-700 p-2 rounded-lg text-white font-bold hover:bg-green-900"  id="b0" type="submit"><a href="{{ route('consignationfournisseurs.create') }}">Ajouter une consignation</a></button>
        </div>
        <hr class="h-1 mt-2 mb-3">
        <h2 class="text-center" >La liste des consignations</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Fournisseur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TypeEballage
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantite
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
                @forelse ($listconsfour as $cf)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$cf->$p->fournisseur->nom_fournisseur}}
                    </th>
                    <td class="px-6 py-4">
                        {{$cf->typemballage->libelle}}
                    </td>
                    <td class="px-6 py-4">
                        {{$cf->quantite_Consigne}}
                    </td>
                    <td>
                        <button id="b2"><a href="{{route('consignationfournisseurs.edit' ,$cf->id)}}"><img src="{{asset('images/msj.jpg')}}" alt="" style="width:50px;"></a></button>
                    </td>
                    <td>
                        <button id="b3"><a href="{{route('consignationfournisseurs.show' ,$cf->id)}}">Show</a></button>
                    </td>
                    <td>
                        <form action="{{route('consignationfournisseurs.destroy ',$cf->id)}}"  method="post">
                            @csrf
                            @method("DELETE")
                            <button  id="bx" type="submit"><img src="{{asset('images/pb.png')}}" alt="" style="width:50px;"></button>
                        </form>
                    </td>
                </tr>
                @empty
                    Aucune consignation existante
                @endforelse

            </tbody>
        </table>
    </div>

</x-app-layout>
