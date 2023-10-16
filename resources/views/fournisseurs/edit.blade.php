@extends('layouts.base')
@section('content')
<form action="{{route ('fournisseurs.update', $fournisseur->id_fournisseur) }}" method="post">
    @csrf
    <div class="contener">
        <div class="enf1">
            <label for="nom_fournisseur">Nom_fournisseur</label>
            <input type="text" name="nom_fournisseur" value="@php if (!empty($fournisseur)){echo $fournisseur->nom_fournisseur;} @endphp"/><br>
        </div>
        <div class="enf2">
            <label for="contact">Contact</label>
            <input type="text" name="contact" value="@php if (!empty($fournisseur)){echo $fournisseur->contact;} @endphp"/><br>
        </div>
        <div class="enf3">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="@php if (!empty($fournisseur)){echo $fournisseur->adresse;} @endphp"/><br>
        </div>
        <button id="b1" type="submit">Enregistrer</button>
    </div>  
</form>
@endsection
