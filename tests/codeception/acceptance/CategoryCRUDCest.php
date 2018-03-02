<?php
use Page\Category as CategoryManager;

class CategoryCRUDCest
{


    public static $categoryName = " ";
    public static $categoryAlias = " ";

    public function categoryCreate(\AcceptanceTester $I){
        //faker library
        $faker = Faker\Factory::create();
        
        //Work On creation of category o
        $I->doAdministratorLogin();

        $I->see('Control Panel');
        $I->click(CategoryManager::$categoryMain);
    
        //New Category    
        $I->click(CategoryManager::$newCategory);

        //Implementing faker library to give fake title and alias
        $categoryName = $faker->name;
        $I->fillField(CategoryManager::$categoryTitle,$categoryName);

        $categoryAlias = $faker->userName;
        $I->fillField(CategoryManager::$categoryTitleAlias,$categoryAlias);

        $I->click(CategoryManager::$categorySaveClose);
    }

    public function categotyEdit(\AcceptanceTester $I){
        
        //faker library
        $faker = Faker\Factory::create();

        //Login
        $I->doAdministratorLogin();

        //Selecting Category
        $I->see('Control Panel');
        $I->click(CategoryManager::$categoryMain);

        //select the item to be edited and click on edit
        $I->click(CategoryManager::$selectItem);
        $I->click(CategoryManager::$clickEdit);

        //editing part
        $categoryName = $faker->title;
        $I->fillField(CategoryManager::$categoryTitle,$categoryName);

        $categoryAlias = $faker->userName;
        $I->fillField(CategoryManager::$categoryTitleAlias,$categoryAlias);

        //Save and close
        $I->click(CategoryManager::$categorySaveClose);

    }

    public function categoryDelete(\AcceptanceTester $I){
        $faker = Faker\Factory::create();

        //Login 
        $I->doAdministratorLogin();
        
        //Select category o.O
        $I->see('Control Panel');
        $I->click(CategoryManager::$categoryMain);

        //Work On deletion
        $I->click(CategoryManager::$selectItem);
        $I->click(CategoryManager::$clickTrash);
       
        //$I->click(CategoryManager::$clickOnCreatedCategory);
    }

}
