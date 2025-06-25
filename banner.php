<?php
header("Content-Type: image/png");

// Create image
$image = imagecreate(400, 100);

// Colors
$blue = imagecolorallocate($image, 0, 0, 255);
$white = imagecolorallocate($image, 255, 255, 255);

// Add Text
imagestring($image, 5, 50, 40, "Welcome to Our Shop!", $white);

// Output
imagepng($image);
imagedestroy($image);
?>
