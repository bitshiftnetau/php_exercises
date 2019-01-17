<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<?php

$key = $_POST["key"];
$value = $_POST["value"];

foreach($key as $key){
  
}

foreach($value as $value){

}


$kv = array(
  $key[0]=>$value[0],
  $key[1]=>$value[1],
  $key[2]=>$value[2],
  $key[3]=>$value[3],
  $key[3]=>$value[3]
);

if(empty($value)){
  echo "There are no values";
} else {
  foreach($kv as $key=>$value){
   if (empty($value)){
   }else{
     echo "<h1>$key is $value</h1><br>";
   }
  }
}
?>

 
</body>
</html>
