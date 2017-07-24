<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/24/2017
 * Time: 10:21 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../controller/categoryController.php" method="get">
        <input type="hidden" value="<?php echo $categories['id']?>" name="category_id" >
        <input type="text" value="<?php echo $categories['name'] ?>" name="category_name">
        <input type="submit" value="Update" name="confirm-update">
    </form>
</body>
</html>
