@extends('layout')
@section('content')

<form method='post'>
  @csrf
  <fieldset>
    <legend>Ajouter une categorie</legend>
    <div class="mb-3">
      <label class="form-label">Nom du Categorie :</label>
      <input type="text" name="nom_categorie" class="form-control" >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<hr>
<a href="{{route('racine')}}" class="btn btn-dark">Back to Home</a>

@endsection