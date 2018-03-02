<?php
use Page\Category as CategoryManager;

class CategoryCRUDCest
{


    public static $categoryName = " ";
    public static $categoryAlias = " ";

    public function categoryCreate(\AcceptanceTester $I){
        //faker library
        $faker = Faker\Factory::create();
//      Work On creation of category o
        $I->doAdministratorLogin();
        //$I->see('Control Panel');
        $I->click(CategoryManager::$categoryMain);
        
       // $I->amOnPage(CategoryManager::$urlCategory1);
        
        $I->click(CategoryManager::$newCategory);

        $categoryName = $faker->name;
        $I->fillField(CategoryManager::$categoryTitle,$categoryName);

        $categoryAlias = $faker->userName;
        $I->fillField(CategoryManager::$categoryTitleAlias,$categoryAlias);

        $I->click(CategoryManager::$categorySaveClose);

         //$I->amOnPage(CategoryManager::$urlAfterSaveClose);
    }

    public function categotyEdit(\AcceptanceTester $I){
         //faker library
        $faker = Faker\Factory::create();
//      Work On creation of category o
        $I->doAdministratorLogin();
        //$I->see('Control Panel');
        $I->click(CategoryManager::$categoryMain);
        //select the item to be edited
        $I->click(CategoryManager::$selectItem);
         //click on edit
        $I->click(CategoryManager::$clickEdit);

        //editing part
        $categoryName = $faker->name;
        $I->fillField(CategoryManager::$categoryTitle,$categoryName);

        $categoryAlias = $faker->userName;
        $I->fillField(CategoryManager::$categoryTitleAlias,$categoryAlias);

        $I->click(CategoryManager::$categorySaveClose);
    }

    public function categoryDelete(\AcceptanceTester $I){
        $faker = Faker\Factory::create();
//      Work On creation of category o
        $I->doAdministratorLogin();
        //$I->see('Control Panel');
        $I->click(CategoryManager::$categoryMain);
        //Work On deletion
        $I->click(CategoryManager::$selectItem);
        $I->click(CategoryManager::$clickTrash);
       
        //$I->click(CategoryManager::$clickOnCreatedCategory);
    }

}
