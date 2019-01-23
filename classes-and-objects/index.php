<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<h1>Classes & Objects</h1>

<p>Enter the details of a book</p>

<form action="index.php" method="POST">
  
  Your Name: <input type="text" name="details[]" required>
  Title: <input type="text" name="details[]" required>
  Author: <input type="text" name="details[]">
  Pages: <input type="text" name="details[]">
<input type="submit" value="submit">
</form>

<?php

class Book {

  var $name;
  var $title;
  var $author;
  var $pages;

  function __construct($form_array){

    $this->name = $form_array[0];
    $this->title = $form_array[1];
    $this->author = $form_array[2];
    $this->pages = $form_array[3];
  }
}

function print_object($book){

  echo "<br>
     New book was created by: $book->name<br>
     Title: $book->title <br>
     Author: $book->author <br>
     Pages: $book->pages <br>
    ";
}

$book1 = new Book($_POST["details"]);

  if(($var[0] = $_POST["details"]) > 0 ){
  print_object($book1);
  }
?>
</body>
</html>
