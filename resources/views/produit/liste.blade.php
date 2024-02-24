@extends('layout')

@section('content')
    <h1>Liste des produits</h1>
    <table border=1 class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Categorie</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($produits as $produit)
        <tr>
            <td>{{$produit->nom}}</td>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->categorie->nom}}</td>
            <td>
                <button class="border border-info bg-info bg-opacity-10 ">
                    <a class="link-dark nav-link text-info" href="{{route('details_produit', ['id' => $produit->id]) }}">Details</a>
                </button> 
            </td>
            <td>
                <button class="border border-warning bg-warning bg-opacity-10 ">
                    <a class="link-dark nav-link text-warning" href="{{route('modifier_produit', ['id' => $produit->id]) }}">Modifier</a>  
                </button>    
            </td>
            <td>
            <form action="{{route('supprimer_produit', ['id' => $produit->id]) }}" method="post">  
                @csrf
                @method('DELETE')
                <button  class='border border-danger bg-danger bg-opacity-10 text-danger' type="submit">Supprimer</button>  
            </form>
        </tr>
        @endforeach
    </table>
    <hr>

    <a href="{{route('racine')}}" class="btn btn-dark">Back to Home</a>

    @endsection


