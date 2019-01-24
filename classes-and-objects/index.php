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
  Your Name: <input type="text" name="book_details[]" required><br>
  Title: <input type="text" name="book_details[]" required><br>
  Author: <input type="text" name="book_details[]"><br>
  Pages: <input type="text" name="book_details[]"><br>
  Genre: <input type="text" name="book_details[]"><br>
<input type="submit" value="submit"><br>
</form>
<hr>
<h2>Create new library</h2>
<form action="index.php" method="POST">
  Library Name: <input type="text" name="lib_details[]"><br>
  Library Address: <input type="text" name="lib_details[]"><br>
  Library Ph #: <input type="text" name="lib_details[]"><br>
<input type="submit" value="submit"><br>
</form>



<?php


/***************
 * BOOK CLASS
 **************/
class Book {

  private $name;
  private $title;
  private $author;
  private $pages;
  private $genre;

  function __construct($form_array){

    //$this->setter_function($form_array[0]);
    $this->name = $form_array[0];
    $this->title = $form_array[1];
    $this->author = $form_array[2];
    $this->pages = $form_array[3];
    $this->genre = $form_array[4];
  }

  function print($book){
    echo "<br>
      New book was created by: $book->name<br>
      Title: $book->title <br>
      Author: $book->author <br>
      Pages: $book->pages <br>";
  }



}


/*****************
 * LIBRARY CLASS 
 ****************/
class Library {

  var $library_name;
  var $library_address;
  var $library_number;

/************
 * Create some kind of object method to assign genres after creating a new library 
 */
  private $genres = array();
  private $index = array();

/*******/

  function __construct($form_array){
   $this->library_name = $form_array[0];
   $this->library_address = $form_array[1];
   $this->library_number = $form_array[2];
  } 

  private function _sort($i, $len){
    for($j = $i; $j < $len; $j++){
      if($j == $len){
        return 0;
      }
      $index[$j] = $index[$j+1];
    }
  }

  function add_book($new_book){
    $index[] = $new_book;
  }

  function del_book($old_book){
    $len = count($index);
    
    for($i = 0; $i < $len; $i++){
      if($index[$i]->name == $old_book->name ){
        $index[$i] = 0;
        _sort($i, $len);
        return 0;
      }
    }
  }
}

if(($var[0] = $_POST["book_details"]) > 0 ){
    $book1 = new Book($_POST["book_details"]);
    print_book($book1);
  }


  if(($var[0] = $_POST["lib_details"]) > 0 ){
    $lib1 = new Library($_POST["lib_details"]);
    print_lib($lib1);
  }
?>
</body>
</html>
