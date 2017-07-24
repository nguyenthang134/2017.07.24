<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/24/17
 * Time: 11:24 AM
 */

require_once "../controller/categoryController.php";
$categoryController = new CategoryController();
$categories = $categoryController->getAll();
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
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td></td>
        </tr>
        <?php foreach ($categories as $category): ?>
            <form action="../controller/categoryController.php" method="get">
                <tr>
                    <td><?php echo $category->id ?></td>
                    <td><?php echo $category->name ?></td>
                    <td>
                            <input type="submit" value="Delete" name="delete">
                            <input type="hidden" value="<?php echo $category->id ?>" name="category_id">

                    </td>
                    <td>
                            <input type="submit" value="Update" name="update">
                    </td>
                </tr>
            </form>
        <?php endforeach; ?>
    </table>
</body>
</html>
