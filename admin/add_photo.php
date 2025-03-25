<?php
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$array = $user->get_def();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $def_id = $_POST['def_id'];
    $uploadDir = "../imgs/"; // Local folder to store images
    $created_at = date('Y-m-d H:i:s');

    // Create uploads folder if not exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Handle file upload
    $fileName = basename($_FILES["image"]["name"]);
    $filePath = $uploadDir . $fileName;
    $fileType = pathinfo($filePath, PATHINFO_EXTENSION);

    // Allowed file types
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
            // Create an instance of your class that contains uploadImage()
            // Insert into database
            if ($user->uploadImage($def_id, $fileName, $filePath, $created_at)) {
                echo "File uploaded and saved successfully!";
            } else {
                echo "Database error.";
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.";
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
    <form method="POST" enctype="multipart/form-data">
        <label for="Inputs">Where it is going lol:</label> <br>
        <select name="def_id">
            <option value="" disabled selected>Submit to:</option>
                <?php foreach ($array as $arr) { ?>
                    <option value="<?=($arr['id']) ?>"><?=($arr['name']) ?></option>
                <?php } ?>
        </select> <br>
        <label for="Photo">Photo</label> <br>
        <input type="file" name='image'><br>

        <button type='submit'>Upload</button>
    </form>

    
</body>
</html>