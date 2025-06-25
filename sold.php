<?php
header("Content-Type: image/png");

// Create image canvas
$image = imagecreate(350, 80);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Background
$black = imagecolorallocate($image, 0, 0, 0);      // Text

// Add text
imagestring($image, 5, 80, 30, "100 Items Sold", $black);

// Output image
imagepng($image);
imagedestroy($image);
?>
