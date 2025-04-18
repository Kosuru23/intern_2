<?php
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$array = $user->get_indicator();

$name = $description = $indicator_name = $recordid = '';


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {
    $image_name = $_GET['name'];

    // Replace underscores with spaces (or dashes if preferred)
    $formatted_name = str_replace("_", " ", $image_name); // Converts "OCHO_png" → "OCHO png"

    // Fetch image from database using formatted name
    $record = $user->fetch_image($formatted_name); 
    
    if (!empty($record) && isset($record['image_path'])) {
        $image_path = $record['image_path'];
    }
}

$image_type = pathinfo($image_path, PATHINFO_EXTENSION);
$mime_type = ($image_type == "png") ? "image/png" : "image/jpeg";

// Serve the image
header("Content-Type: $mime_type");
readfile($image_path);
exit;
