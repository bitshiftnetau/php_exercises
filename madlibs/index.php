<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>

<body>
  <form action="" method="GET">
    <input type=text name="color">
    <input type=text name="asdf">
    <input type=submit value="Submit">
  </form>
</body>

<?php
  $color = $_GET["color"];
  $test = $_GET["asdf"];

  echo "$color";
    echo "$test";

?>

</html>
