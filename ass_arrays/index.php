<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <fieldset>

<form action="index.php" method="POST">
  <input type="text" name="student">
  <input type="submit">
</form>
<!--
  <form action="./output.php" method="POST">
    <input type="text" name="key[]" value="David">=<input type="text" name="value[]" value=""><br>
    <input type="text" name="key[]" value="Naomi">=<input type="text" name="value[]" value=""><br>
    <input type="text" name="key[]" value="Aidan">=<input type="text" name="value[]" value=""><br>
    <input type="text" name="key[]" value="Bethany">=<input type="text" name="value[]" value=""><br>
    <input type="text" name="key[]" value="Cory">=<input type="text" name="value[]" value=""><br>
    <input type="submit" value"submit">
  </form>
-->
  </fieldset>

<?php
  $grades = array("Jim" => "A+", "Dave" => "C", "Janice" => "D");
  echo $grades[$_POST["student"]];
  echo count($grades);
?>

</body>
</html>
