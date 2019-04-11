<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/04/2019
 * Time: 10:54
 */

namespace App;


class RecipeRepository implements RecipeDataInterface
{

    public $csvFilename;

    /**
     * RecipeRepository constructor.
     */
    public function __construct()
    {
        $this->csvFilename = 'recipe-data.csv';
    }


    public function getAll()
    {
        if (!file_exists($this->csvFilename) || !is_readable($this->csvFilename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($this->csvFilename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, ',')) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    public function getItem($id)
    {
        $recipes = $this->getAll();

        foreach ($recipes as $i => $recipe) {
            if ($recipe['id'] === $id) {
                return $recipe;
            }
        }

    }

    public function getAllByCuisine($cuisine)
    {
        $recipes = $this->getAll();
        $cuisines = [];

        foreach ($recipes as $i => $recipe) {
            if ($recipe['recipe_cuisine'] === $cuisine) {
                $cuisines[] = $recipe;
            }
        }
        return $cuisines;
    }

    public function saveItem($request)
    {
        // store in DB
    }
}