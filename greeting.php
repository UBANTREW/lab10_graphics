<?php
// MUST be first — no blank lines above!

header("Content-Type: image/png");
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create image
$image = imagecreatetruecolor(400, 100);

// Colors
$lightgray = imagecolorallocate($image, 220, 220, 220);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill background
imagefill($image, 0, 0, $lightgray);

// Font path
$font = __DIR__ . "/roboto/Roboto-Regular.ttf";

// Final check
if (!file_exists($font)) {
    die("❌ Font not found at $font");
}

// Text
imagettftext($image, 20, 0, 50, 60, $black, $font, "Hello, User!");

// Output
imagepng($image);
imagedestroy($image);
?>
