<?php
// bmi Calculator Assignment

$name = 'Zach';
$height = 166;
$weight = 90.72;
// $height is in cm and $weight is in kg
$height2 = 1.66;
// $height2 is in meters
$heightSquared = $height2 * $height2;

$bmi = $weight / $heightSquared;

echo "$name's BMI = $bmi";
?>