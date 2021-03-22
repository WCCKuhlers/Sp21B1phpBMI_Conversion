<?php
$name = 'pogO';
$weight = 62;
$height = 175;

$heightM = $height / 100;
$heightSq = $heightM * $heightM;
$bmi = $weight / $heightSq;
echo $bmi;
echo '<br>';
echo $name;

?>