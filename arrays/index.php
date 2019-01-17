<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="index.php" method="POST">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
    <input type="text" name="num[]">
   <input type="submit" name="submit">
  </form>

<?php

  //$numbers = array( $_POST['num1'], $_POST['num2'], $_POST['num3']);
  $numbers = $_POST["num"];

  foreach($numbers as $elements){
    $largest = $elements > $largest ? $elements : $largest;
  }
  echo "The largest number is $largest";

?>

</body>
</html>
