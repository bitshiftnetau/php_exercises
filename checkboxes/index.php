<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

  <form action="index.php" method="POST">
   Apples:  <input type="checkbox" name="fruits[]" value="apples"><br>
   Oranges:  <input type="checkbox" name="fruits[]" value="oranges"><br>
   Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit" value"submit">
  </form>

<?php

$fruits = $_POST["fruits"];

  $a = $fruits[0];
  $b = $fruits[1];
  $c = $fruits[2];

  echo "<h1>
    $a <br>
    $b <br>
    $c <br>
    </h1>";

echo "<h2> Selected Order </h2>";
echo $fruits[0]; echo "<br>";
echo $fruits[1]; echo "<br>";
echo $fruits[2]; echo "<br>";




?>

</body>
</html>
