<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Produit;

use Illuminate\Http\Request;

class ProduitController extends Controller{
    public function index(){
        $categories= Categorie::all();
        return view('layout',['categories'=>$categories]);

    }
    public function affiche_form(){
        $categories= Categorie::all();
        return view('produit.ajouter',['categories'=>$categories]);
    }
    public function ajouterCategorie(){
        return view('categorie.ajouter');
    }
    public function storeCategorie(Request $request){
        Categorie::create([
            'nom' => $request->input('nom_categorie'),
        ]);
        return redirect()->route('racine');

    }
    public function storeProduit(Request $request){
        Produit::create([
            'nom'=> $request->input('nom'),
            'prix'=>$request->input('prix'),
            'categorie_id'=>$request->input('categorie_id'),

        ]);
        return redirect()->route('liste_produit');
    }
    public function show_all_produit(){
        $produits = Produit::all();
        return view('produit.liste',['produits'=>$produits]);
    }
    public function afficher_produit_categorie($id){

        $categorie = Categorie::findOrFail($id);
        $produits = Produit::where('categorie_id',$id)->get();
        return view('produit.liste_p_categorie',compact('categorie','produits'));
    }
    public function details_produit($id){
        $produit = Produit::findOrFail($id);
        return view('produit.details',compact('produit'));
    }

    public function modifier_produit($id){
        $produit = Produit::findOrFail($id);
        $categories= Categorie::all();
        return view('produit.modifier',compact('produit','categories'));
    }
    public function update_produit(Request $request , $id){
        $produit = Produit::findOrFail($id);
        $produit->update([
            'nom' => $request->input('nom'),
            'prix' => $request->input('prix'),
            'categorie_id' => $request->input('categorie_id'),
        ]);

        return redirect()->route('liste_produit');
    }
    public function supprimer_produit($id){
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->route('liste_produit');
    }

}
