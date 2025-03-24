<?php
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$array = $user->get_indicator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $indicator_name = $_POST['indicator'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $created_at = date('Y-m-d H:i:s');

    $user->add($indicator_name, $name, $description, $created_at);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="Inputs">Where it is going lol:</label> <br>
        <select name="indicator">
            <option value="" disabled selected>Submit to:</option>
                <?php foreach ($array as $arr) { ?>
                    <option value="<?=($arr['name']) ?>"><?=($arr['name']) ?></option>
                <?php } ?>
        </select> <br>
        <label for=""></label>
        <label for="name">Name: </label> <br>
        <input type="text" name='name'><br>

        <label for="description">Description:</label> <br>
        <textarea name="description" id=""></textarea> <br>

        <button type='submit'>Upload</button>
    </form>
   
</body>
</html>