<?php

namespace App;


interface RecipeDataInterface
{
    public function getAll();

    public function getItem($id);

    public function getAllByCuisine($cuisine);

    public function saveItem($request);

}
