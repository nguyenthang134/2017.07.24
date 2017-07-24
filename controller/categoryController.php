<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/24/17
 * Time: 1:45 PM
 */
require "../model/categoryModel.php";

$categoryController = new CategoryController();
$categoryModel = new CategoryModel();

if (isset($_GET['delete'])) $categoryController -> deleteCategory($_GET['category_id']);
if (isset($_GET['update'])) $categoryController -> selectCategory($_GET['category_id']);
if (isset($_GET['confirm-update'])) $categoryController -> updateCategory($_GET['category_id'],$_GET['category_name']);

class CategoryController{
   function getAll(){
       global $categoryModel;
       $categories = $categoryModel->getAll();
       return $categories;
   }
//
   function deleteCategory($category_id){
       global $categoryModel;
       $categoryModel-> deleteCategory($category_id);
//       echo $category_id;
   }

    function selectCategory($category_id){
        global $categoryModel;
        $categoryModel-> selectCategory($category_id);
//       echo $category_id;
    }

    function updateCategory($category_id, $category_name){
        global $categoryModel;
        $categoryModel -> updateCategory($category_id, $category_name);
    }
}


