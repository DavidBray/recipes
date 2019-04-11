# Recipes Project 

Framework:  Lumen (PHP 7.1.3 required).

Reasons for using Lumen:
* Light + fast PHP framework ideal for APIs.
* Mobile apps + web interfaces will consume identical APIs.

The project just requires cloning + composer install. No .env file changes are required. The Postman routes are listed below.

The project has been created using the following components:

* RecipeController.php
* RecipeDataInterface.php
* RecipeRepository.php
* RecipeDataServiceProvider.php - to bind the RecipeDataInterface to the RecipeRepository (csv file)

Routes (using a local domain - please change accordingly):

GET
http://recipes.test/recipes
Get all recipes

GET
http://recipes.test/recipe/{id}
Get a particular recipe

GET
http://recipes.test/recipes/{cuisine}
Get all recipes for a cuisine

*POST
http://recipes.test/recipe
Create a new recipe

*POST
http://recipes.test/recipe/rating/{rating}
Create a recipe rating in ratings table

*PUT
http://recipes.test/recipe/{id}
Update a recipe

* Please note: Creating/Updating and rating a new recipe was only stub implemented due to the project specifing a database should not be used. The routes have been implemented however with test data returned.
