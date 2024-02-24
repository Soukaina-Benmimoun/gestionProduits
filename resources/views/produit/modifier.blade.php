@extends('layout')
@section('content')

<form method='post'>
  @csrf
  @method('PUT')
  <fieldset>
    <legend>Ajouter un produit</legend>
    <div class="mb-3">
      <label class="form-label">Nom :</label>
      <input type="text" name="nom" value='{{$produit->nom}}' class="form-control" >
    </div>
    <div class="mb-3">
      <label class="form-label">Prix :</label>
      <input type="number" name="prix" value='{{$produit->prix}}' class="form-control" >
    </div>
    <div class="mb-3">
      <label class="form-label">Categorie :</label>
      <select class="form-select" name="categorie_id">
        @foreach($categories as $categorie)
        @if ($categorie->id===$produit->categorie_id)
            <option value='{{$categorie->id}}' selected >{{$categorie->nom}}</option>
        @else
            <option value='{{$categorie->id}}' >{{$categorie->nom}}</option>
        @endif
        @endforeach

      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button> 
    <a href="{{route('liste_produit')}}" class="btn btn-primary">Back</a>

  </fieldset>
</form>
<hr>

<a href="{{route('racine')}}" class="btn btn-dark">Back to Home</a>

@endsection