<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/24/17
 * Time: 11:28 AM
 */

class CategoryDB{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this-> id = $id;
        $this -> name = $name;
    }
}