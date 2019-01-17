<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<?php

$isMale = "yes";
$isTall = true;

$age = 17;

/*
if($isMale === "yes"){
  echo "You are male";
} elseif ($isMale === "no") {
  echo "You are not male";
} else {
  echo "Identify however you want";
}*/

if($isMale === "yes" && $isTall){
  echo "You are a male and tall<br>";
} elseif($isMale === "yes" && !$isTall){
  echo "you are male but are not tall<br>";
} elseif($isMale === "no" && $isTall){
  echo "You are not male, but are tall<br>";
} else {
  echo "You are not male and are not tall<br>";
}

if($age >= 18){
  echo "You can drink<br>";
} else {
  echo "You cannot drink<br>";
}

function ter($num1, $num2){
  return $num1 > $num2 ? $num1 : $num2;
}

echo $num_ret = ter(3,5);

?>
</body>
</html>
