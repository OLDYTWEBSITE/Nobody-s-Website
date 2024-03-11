<?php
$uploadDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['video'])) {
    $uploadFile = $uploadDir . basename($_FILES['video']['name']);
    $allowedExtensions = ['mp4', 'avi', 'webm']; // Add more extensions as needed

    $fileExtension = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions) &&
        move_uploaded_file($_FILES['video']['tmp_name'], $uploadFile)) {
        echo "Video successfully uploaded!";
    } else {
        echo "Error uploading the video. Check file format and try again.";
    }
} else {
    echo "No video file received.";
}
?>
