<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<?php
include "library_header.php";
include "library_navbar.php"
?>

<h2>Create new library</h2>
<form action="store_library.php" method="POST">
  Library Name: <input type="text" name="lib_details[]"><br>
  Library Address: <input type="text" name="lib_details[]"><br>
  Library Ph #: <input type="text" name="lib_details[]"><br>
<input type="submit" value="submit"><br>
</form>


</body>
</html>
