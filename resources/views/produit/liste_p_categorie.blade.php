@extends('layout')

@section('content')


    <h1>la liste des produits de la categorie {{$categorie->nom}}</h1>
    <table border=1 class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
        @foreach($produits as $produit)
        <tr>
            <th>{{$produit->nom}}</th>
            <th>{{$produit->prix}}</th>
        </tr>
        @endforeach
    </table>    
<hr>
    <a href="{{route('racine')}}" class="btn btn-dark">Back to Home</a>

@endsection


