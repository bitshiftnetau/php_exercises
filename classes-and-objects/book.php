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


 <p>Enter the details of a book</p>

<form action="store_book.php" method="POST">
  Your Name: <input type="text" name="book_details[]" required><br>
  Title: <input type="text" name="book_details[]"><br>
  Author: <input type="text" name="book_details[]"><br>
  Pages: <input type="text" name="book_details[]"><br>
  Genre: <input type="text" name="book_details[]"><br>
<input type="submit" value="submit"><br>
</form>

<hr>

 
</body>
</html>

