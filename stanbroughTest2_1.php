<?php
$name = 'Taylor';
$weight = 50;
$height = 162.56;
$heightMeters = ($height/100);
$heightSquared = ($heightMeters*$heightMeters);
$bmi = ($weight/$heightSquared);
echo ('Welcome '. $name .'. Your BMI is: '. $bmi);
?>
