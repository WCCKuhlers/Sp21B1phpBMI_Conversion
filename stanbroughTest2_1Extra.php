<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
  <h2>Please enter your height in cm: </h2>
 <input type="text" name="height">
 <input type="submit" value="Submit Height">
  <h2>Please enter your weight in kg: </h2>
 <input type="text" name="weight">
 <input type="submit" value="Submit Weight">

 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$heightMeters = ($height/100);
$heightSquared = ($heightMeters*$heightMeters);
$bmi = ($weight/$heightSquared);
echo "<h3> Hello $name. Your BMI is:$bmi </h3>";
?>
</body>
</html>