<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container text-center ">
    <div class="row justify-content-start">
        <div class="col nav">
            <p><a class="link-dark nav-link" href="{{route('ajouter_produit')}}">Ajouter un produit</a></p>
        </div>
        <div class="col nav">
            <p><a class="link-dark nav-link" href="{{route('liste_produit')}}">Liste des produits</a></p>
        </div>
        <div class="col-3">
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="link-dark nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" > Liste produits par categorie</a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $categorie)
                        <li><a class="dropdown-item" href="{{route('liste_pr_cate', ['id' => $categorie->id]) }}"> Liste des produits du {{$categorie->nom}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
    </div>
    <div class="col-3 nav" >
            <p><a class="link-dark nav-link" href="{{route('ajouter_categorie')}}">Ajouter categorie</a></p>
    </div>
    </div>
</div>

@yield('content')






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>