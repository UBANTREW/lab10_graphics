<?php
header("Content-Type: image/png");

// Create canvas
$image = imagecreate(400, 300);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);      // Background
$green = imagecolorallocate($image, 0, 255, 0);          // Circle
$purple = imagecolorallocate($image, 128, 0, 128);       // Line

// Draw green circle (ellipse)
imageellipse($image, 200, 150, 100, 100, $green);

// Draw purple line (diagonal)
imageline($image, 50, 50, 350, 250, $purple);

// Output
imagepng($image);
imagedestroy($image);
?>
