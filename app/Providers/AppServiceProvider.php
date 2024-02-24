<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Categorie;
use App\Models\Produit;   
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $categories= Categorie::all();

        View::share('categories', $categories);
    }
}
