@extends('layout')
@section('content')

<form method='post'>
  @csrf
  <fieldset>
    <legend>Ajouter un produit</legend>
    <div class="mb-3">
      <label class="form-label">Nom :</label>
      <input type="text" name="nom" class="form-control" >
    </div>
    <div class="mb-3">
      <label class="form-label">Prix :</label>
      <input type="number" name="prix" class="form-control" >
    </div>
    <div class="mb-3">
      <label class="form-label">Categorie :</label>
      <select class="form-select" name="categorie_id">
        @foreach($categories as $categorie)
          <option value='{{$categorie->id}}'>{{$categorie->nom}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<hr>
<a href="{{route('racine')}}" class="btn btn-dark ">Back to Home</a>

@endsection