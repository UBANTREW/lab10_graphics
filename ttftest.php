<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$font = __DIR__ . "/roboto/Roboto-Regular.ttf";
echo "Checking font at: $font<br>";

if (!file_exists($font)) {
    die("❌ Font file not found.");
}

$image = imagecreatetruecolor(200, 50);
$bg = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $bg);

$text_result = imagettftext($image, 20, 0, 10, 30, $black, $font, "Test");

if ($text_result === false) {
    die("❌ imagettftext() failed");
} else {
    echo "✔️ imagettftext() worked!";
}
