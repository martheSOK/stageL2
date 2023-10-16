<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex justify-end">
            <button class="bg-green-700 p-2 rounded-lg text-white font-bold hover:bg-green-900">
                <a href="{{ route('consignationfournisseurs.create') }}">Ajouter une consignation</a>
            </button>
        </div>
        <hr class="h-1 mt-2 mb-3">
        <h2 class="text-center">La liste des consignations</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Fournisseur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type d'emballage
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantité
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Éditer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Afficher
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supprimer
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listconsignationfournisseurs as $listconsignationfournisseur)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $listconsignationfournisseur->fournisseur->nom_fournisseur }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $listconsignationfournisseur->typemballage->libelle }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $listconsignationfournisseur->quantite_Consigne }}
                    </td>
                    <td>
                        <a href="{{ route('consignationfournisseurs.edit', $listconsignationfournisseur->id) }}" class="btn-edit">
                            Éditer
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('consignationfournisseurs.show', $listconsignationfournisseur->id) }}" class="btn-show">
                            Afficher
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('consignationfournisseurs.destroy', $listconsignationfournisseur->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn-delete" type="submit">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4">Aucune consignation existante</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-app-layout>
