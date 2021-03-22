<?php
$Name = 'Nevzet';
$weightKG = 113.39;
$heightFT = 6;
$heightMeters = 1.85;
$squared = $heightMeters * $heightMeters;
$total = $weightKG / $squared;
echo "$Name 's BMI is $total";

?>