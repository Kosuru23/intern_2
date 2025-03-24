<?php
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$array = $user->get_indicator();

$name = $description = $indicator_name = $recordid = '';

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['id'])) {
        $recordid = $_GET['id'];
        $records = $user->fetch($recordid);
        
        if(!empty($records)) {
            $name = $records['name'];
            $description = $records['description'];
            $indicator_name = $records['indicator_name'];
        } else {
            echo 'No records';
                header('Location: ../admin/tables.php');
                exit();
        }
    } else {
        echo 'No id';
        header('Location: ../admin/tables.php');
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $indicator_name = $_POST['indicator'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $updated_at = date('Y-m-d H:i:s');
    $recordid = $_POST['id'];

    if($user->edit($indicator_name, $name, $description, $updated_at, $recordid)) {
        header('Location: ../admin/tables.php');
        exit();
    }
    else {
        header('Location: ../admin/tables.php');
        exit();
    }
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
        <input type="hidden" name="id" value="<?=$recordid?>">

        <label for="Inputs">Where it is going lol:</label> <br>
        <select name="indicator">
            <option value="" disabled>Submit to:</option>
            <?php foreach ($array as $arr) { ?>
                <option value="<?= $arr['name'] ?>" 
                    <?= ($arr['name'] == $indicator_name) ? 'selected' : '' ?>>
                    <?= $arr['name'] ?>
                </option>
            <?php } ?>
        </select> <br>

        <label for=""></label>
        <label for="name">Name: </label> <br>
        <input type="text" name='name' value='<?=$name?>'><br>

        <label for="description">Description:</label> <br>
        <textarea name="description" id=""><?=$description?></textarea> <br>

        <button type='submit'>Upload</button>
    </form>
   
</body>
</html>