@extends('layouts.base')
@section('content')
<button id="b0" type="submit"><a href="{{ route('fournisseurs.create') }}">Ajouter un fournisseur</a></button>
<h2>Liste des fournisseurs</h2>
<table border='2'>
    <thead>
        <tr id="t1">
            <th>Nom_fournisseur</th>
            <th>Contact</th>
            <th>Adresse</th>
            <th>suppression</th>
            <th>Edition</th>
            <th>Affichage</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listfournisseur as $f) 
            <tr>
                <td>{{$f->nom_fournisseur}}</td>
                <td>{{$f->contact}}</td>
                <td>{{$f->adresse}}</td>
                <td>
                    <form action="{{route('fournisseurs.destroy ',$f->id_fournisseur)}}"  method="post">
                        @csrf
                        @method("DELETE")
                        <button  id="bx" type="submit">Supprimer</button>
                    </form> 
                </td>
                    
                <td>
                    <button id="b2"><a href="{{route('fournisseurs.edit' ,$f->id_fournisseur)}}">Editer</a></button>
                </td>
                <td>
                    <button id="b3"><a href="{{route('fournisseurs.show' ,$f->id_fournisseur)}}">Show</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection