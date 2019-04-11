<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecipeDataInterface;

class RecipeController extends Controller
{
    public $recipeData;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RecipeDataInterface $recipeData)
    {
        $this->recipeData = $recipeData;
    }


    public function getRecipe(Request $request)
    {
        return json_encode($this->recipeData->getItem($request->id));
    }

    public function getRecipes()
    {
        return json_encode($this->recipeData->getAll());
    }

    public function getRecipesByCuisine(Request $request)
    {
        return json_encode($this->recipeData->getAllByCuisine($request->cuisine));
    }


    public function createRecipe(Request $request)
    {
        $this->recipeData->saveItem($request);
        // TBD - store in DB
        return json_encode(['result' => 'recipe created', 'id' => '11']);
    }


    public function updateRecipe(Request $request)
    {
        // TBD - update row in DB
        return json_encode(['result' => 'recipe '.$request->id.' updated']);
    }


    public function rateRecipe(Request $request)
    {
        // TBD - store row in ratings table in DB
        return json_encode(['result' => 'recipe '.$request->id.' rated with'.$request->rating.' stars']);
    }
}
