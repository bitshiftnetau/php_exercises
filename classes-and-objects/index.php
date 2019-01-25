<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<?php
include "library_header.php";
include "library_navbar.php"; 
?>

<p>Welcome to the Library, what would you like to do?</p>

<fieldset>

<form action="book.php">
  <input type="submit" value="New Book">
</form>
<hr>
<form action="library.php">
  <input type="submit" value="New Library">
</form>

</fieldset>
<!--
<form action="">
  <input type="submit" value="Delete Book">
</form>
 
<form action="">
  <input type="submit" value="Delete Library">
</form>
 -->

</body>
</html>
