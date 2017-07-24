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
}





