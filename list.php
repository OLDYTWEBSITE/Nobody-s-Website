<?php
$uploadDir = 'uploads/';
$videos = array_diff(scandir($uploadDir), array('..', '.'));

// Sort videos by creation time, newest first
$videoPaths = array_map(function ($video) use ($uploadDir) {
    return $uploadDir . $video;
}, $videos);

array_multisort(array_map('filectime', $videoPaths), SORT_DESC, $videos);

header('Content-Type: application/json');
echo json_encode($videos);
?>
