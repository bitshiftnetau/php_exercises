<?php

include "library_header.php";
include "library_navbar.php";

/***************
 * BOOK CLASS
 **************/
class Book {

  private $name;
  private $title;
  private $author;
  private $pages;
  private $genre;

  function __construct($name, $title, $author, $pages, $genre){

    $this->name = $name;
    $this->title = $title;
    $this->author = $author;
    $this->pages = $pages;
    $this->genre = $genre;

    //if we were connected to a database, I would add the book to a library right here.

  }

  function print_book($book){
    
    echo "<br>
      New book was created by: $this->name<br>
      Title: $this->title <br>
      Author: $this->author <br>
      Pages: $this->pages <br>";
    
  }

}

$book1 = new Book(...$_POST["book_details"]);
$book1->print_book($book1);

?>
