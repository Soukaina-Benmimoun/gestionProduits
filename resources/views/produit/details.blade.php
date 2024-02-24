@extends('layout')

@section('content')

<div class="card">

  <div class="card-body">
    <h5 class="card-title">{{$produit->nom}} </h5>
    <p class="card-text">Ce produit est du categorie {{$produit->categorie->nom}} coute {{$produit->prix}} DHs.</p>
    <a href="{{route('liste_produit')}}" class="btn btn-primary">Back</a>
  </div>
</div>
<hr>
<a href="{{route('racine')}}" class="btn btn-dark">Back to Home</a>

@endsection
