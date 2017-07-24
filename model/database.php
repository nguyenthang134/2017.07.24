<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/24/17
 * Time: 11:24 AM
 */
$dsn = "mysql:host=localhost;dbname=library";
$username = "root";
$password = "";

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    echo "Error";
}