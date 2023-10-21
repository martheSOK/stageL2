<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex justify-end">
            <button class="bg-green-700 p-2 rounded-lg text-white font-bold hover:bg-green-900"  id="b0" type="submit"><a href="{{ route('personnels.create') }}">Ajouter un personnel</a></button>
        </div>
        <hr class="h-1 mt-2 mb-3">
        <h2 class="text-center" >La liste des quantités d'emballage de chaque depot</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                      Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Prenom
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Contact
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Adresse
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Depot
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
              @forelse($listePersonnel as $personnel)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$personnel->nom}}
                    </th>
                    <td class="px-6 py-4">
                        {{$personnel->prenom}}
                    </td>
                    <td class="px-6 py-4">
                        {{$personnel->contact}}
                    </td>
                    <td class="px-6 py-4">
                        {{$personnel->adresse}}
                    </td>
                    <td class="px-6 py-4">
                        {{$personnel->depot->designation}}
                    </td>
                    <td>
                        <button id="b2"><a href="{{route('personnels.edit' ,$personnel->id_personnel)}}"><img src="{{asset('images/msj.jpg')}}" alt="" style="width:50px;"></a></button>
                    </td>
                    <td>
                        <button id="b3"><a href="{{route('personnels.show' ,$personnel->id_personnel)}}">Show</a></button>
                    </td>
                    <td>
                        <form action="{{route('personnels.destroy',$personnel->id_personnel)}}"  method="post">
                            @csrf
                            @method("DELETE")
                            <button  id="bx" type="submit"><img src="{{asset('images/pb.png')}}" alt="" style="width:50px;"></button>
                        </form>
                    </td>
                </tr>
                @empty
                    Aucun personnel existante
                @endforelse

            </tbody>
        </table>
    </div>
</x-app-layout>

