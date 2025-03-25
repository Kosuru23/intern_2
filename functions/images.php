<?php
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);

$image_path = '../imgs/default.png'; // Default image if not found

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {
    $image_name = $_GET['name'];

    // Replace underscores with spaces to match database naming
    $formatted_name = str_replace("_", " ", $image_name); // Example: President_Message → President Message

    // Fetch image path from database
    $record = $user->fetch_image($formatted_name);

    if (!empty($record) && isset($record['image_path'])) {
        $image_path = $record['image_path']; // Use stored path from DB
    }
}

// Detect image MIME type
$image_type = pathinfo($image_path, PATHINFO_EXTENSION);
$mime_type = ($image_type == "png") ? "image/png" : "image/jpeg";

// Serve the image
header("Content-Type: $mime_type");
readfile($image_path);
exit;
?>
