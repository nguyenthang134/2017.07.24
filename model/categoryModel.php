<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/24/17
 * Time: 11:29 AM
 */
class CategoryModel{
    function getAll(){
        require "categoryDB.php";
        require "database.php";

        $query = "SELECT * FROM categories";
        $rows = $db -> query($query);

        $categories = [];
        foreach($rows as $row){
            $category = new CategoryDB($row['id'],$row['name']);
            $categories[] = $category;
        }
        return $categories;
    }

    function deleteCategory($category_id){
        require "database.php";
        $query = "DELETE FROM categories WHERE id= ".$category_id;
        $db->exec($query);
        include "../view/list.php";
    }

    function selectCategory($category_id){
        require "database.php";
        $query = "SELECT * FROM categories WHERE id= ".$category_id;
        $categories = $db-> query($query);
        $categories = $categories -> fetch();
        include_once "../view/updateCategory.php";
    }

    function updateCategory($category_id,$category_name){
        require "database.php";
        $query = "UPDATE categories SET name='".$category_name."' WHERE id= ".$category_id;
//        echo $category_name;
//        echo $category_id;
        $db->exec($query);
        include_once "../view/list.php";
//            echo $query;
    }
}





