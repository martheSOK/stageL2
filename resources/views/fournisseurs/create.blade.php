@extends('layouts.base')
@section('content')
<form action="{{route ('fournisseurs.store') }}" method="post">
    @csrf
    <div class="contener">
        <div class="enf1">
            <label for="nom_fournisseur">Nom_fournisseur</label>
            <input type="text" name="nom_fournisseur"  value="{{ old('nom_fournisseur') }}"/><br>
        </div>
        @error('nom_fournisseur')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="enf2">
            <label for="contact">Contact</label>
            <input type="text" name="contact" value="{{ old('contact') }}"/><br>
        </div>
        @error('contact')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="enf3">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="{{ old('adresse') }}"//><br>
        </div>
        @error('adresses')
            <div class="error">{{ $message }}</div>
        @enderror

        <button id="b1" type="submit">Enregistrer</button>
    </div>  
</form>
@endsection
