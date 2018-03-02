<?php
namespace Page;

class Category
{
    // include url of current page
    public static $urlmain = '/index.php';

    
    public static $categoryMain = ['xpath' => '/html/body/div[2]/section/div/div/div[2]/div[1]/div/div/div/ul[1]/li[3]/a/span[2]'];

//url to view categories
    public static $urlCategory1 = '/index.php?option=com_categories&extension=com_content';

//select new category
    public static $newCategory = ['xpath' => '/html/body/div[1]/div/div/div[2]/div/div/div[1]/button'];

//Category Title 
    public static $categoryTitle = ['id' => 'jform_title'];

//Category Alias
    public static $categoryTitleAlias = ['id' => 'jform_alias'];

//Save and Close 
    public static $categorySaveClose = ['xpath' => '/html/body/div[1]/div/div/div[2]/div/div/div[2]/button'];

    public static $urlAfterSaveClose = '/index.php?option=com_categories&view=categories&extension=com_content';

//$selectItem clicks the checkbox which then can be editted , published or moved to trash
    public static $selectItem = ['id' => 'cb1'];

//edit category
    public static $clickEdit = ['xpath' => '/html/body/div[1]/div/div/div[2]/div/div/div[2]/button'];

//send the category to trash
    public static $clickTrash = ['xpath' => '/html/body/div[1]/div/div/div[2]/div/div/div[10]/button'];

}
