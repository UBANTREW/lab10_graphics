<?php
header("Content-Type: image/png");

// Create a blank image
$image = imagecreate(300, 150);

// Colors
$white = imagecolorallocate($image, 255, 255, 255); // Background
$red = imagecolorallocate($image, 255, 0, 0);       // Rectangle
$black = imagecolorallocate($image, 0, 0, 0);       // Text

// Draw rectangle
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Add "Sale!" label
imagestring($image, 5, 120, 70, "Sale!", $black);

// Output image
imagepng($image);
imagedestroy($image);
?>
