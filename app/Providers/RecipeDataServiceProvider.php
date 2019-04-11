<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\RecipeRepository;

class RecipeDataServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\RecipeDataInterface', function ($app) {
          return new RecipeRepository();
        });
    }
}
