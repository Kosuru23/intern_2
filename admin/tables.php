<?php
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$array= $user->load();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' style="width: 70%;">
        <tr>
            <th>Name</th>
            <th style="width: 20%;">Description</th>
            <th>Part of where it is</th>
            <th>Action</th>
        </tr>
    <?php foreach ($array as $arr): 
        if ($arr['deleted'] == '0') {
    ?>
        <tr>
            <td><?=$arr['name']?></td>
            <td><?=$arr['description']?></td>
            <td><?=$arr['indicator_name']?></td>
            <td>
                <a href="../functions/edit.php?id=<?= $arr['id'] ?>">Edit</a>
                <a href="../functions/delete.php?id=<?= $arr['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php 
        }
        else { ?> 
        <tr>
            <td colspan ="5" style="text-align: center;">
                <p>Undelete the thing?</p>
                <a href="../functions/delete.php?id=<?= $arr['id'] ?>&restore=1">Yes</a>
            </td>
        </tr>
    <?php
        }
        endforeach; 
    ?>
    
    </table> 
</body>
</html>