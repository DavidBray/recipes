<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('recipes', [
    'as' => 'recipes.show', 'uses' => 'RecipeController@getRecipes'
]);

$router->get('/recipe/{id}', [
    'as' => 'recipe.show', 'uses' => 'RecipeController@getRecipe'
]);

$router->get('/recipes/{cuisine}', [
    'as' => 'recipes.cuisine.show', 'uses' => 'RecipeController@getRecipesByCuisine'
]);

$router->post('/recipe', [
    'as' => 'recipe.create', 'uses' => 'RecipeController@createRecipe'
]);

$router->put('/recipe/{id}', [
    'as' => 'recipe.update', 'uses' => 'RecipeController@updateRecipe'
]);

$router->post('/recipe/rating/{id}', [
    'as' => 'recipe.rate', 'uses' => 'RecipeController@rateRecipe'
]);

