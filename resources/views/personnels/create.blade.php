<x-app-layout>
    <form action="{{route ('personnels.store') }}" method="post">
    @csrf
    <div class="mt-20">
        <div class="bg-gray-700 w-100 h-10 text-white "> <h1 class="text-center font-bold p-2 ">Enregistrement du personnel<h/h1></div>
        <hr class="h-1 mt-2 mb-3">
      <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" class="form-control"  name="nom" >
      </div>
      <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control"  name="prenom" >
      <div class="form-group">
          <label>Sexe :</label>
          <div class="form-check">
              <input type="radio" class="form-check-input" id="homme" name="sexe" value="homme">
              <label class="form-check-label" for="homme">Homme</label>
          </div>
          <div class="form-check">
              <input type="radio" class="form-check-input" id="femme" name="sexe" value="femme">
              <label class="form-check-label" for="femme">Femme</label>
          </div>
      </div>
      <div class="form-group">
        <label for="contact">Contact :</label>
        <input type="text" class="form-control"  name="contact" >
      </div>

      <div class="form-group">
          <label for="adresse">Adresse :</label>
          <input type="text" class="form-control"  name="adresse">
      </div><br>
       <div>
            <label for="id_depot">Depot</label>
            <select name="id_depot">
                <option value="">selectionné</option>
                @foreach ($id_depot as $d)
                    <option value="{{ $d->id_depot }}">{{ $d->designation }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
</x-app-layout>

