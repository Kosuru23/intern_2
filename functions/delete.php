<?php 
require_once '../classes/connect.php';
require_once '../classes/database.php';
$db = new Database();
$user = new User($db);

$id = $restore = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['restore'])) {
    $restore = $_GET['restore'];
} else {
    $restore = null;
}

// echo "ID: " . htmlspecialchars($id) . "<br>";
// echo "Restore: " . htmlspecialchars($restore) . "<br>";

if($id) {
    if($restore) {
        $deletion = 0;
        if ($user->soft_delete($id, $deletion)) {
            echo 'Success';
            header('Location: ../admin/tables.php');
            exit();
        }
        else {
            echo 'Failed';
        }
    }
    else {
        $deletion = 1;
        if ($user->soft_delete($id, $deletion)) {
            echo 'Success';
            header('Location: ../admin/tables.php');
            exit();
        }
        else {
            echo 'Failed';
        }
    }
}


?>