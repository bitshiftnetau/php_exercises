<?php

include "library_header.php";
include "library_navbar.php";

/*****************
 * LIBRARY CLASS 
 ****************/

class Library {

  private $library_name;
  private $library_address;
  private $library_number;

 // Create some kind of object method to assign genres after creating a new library 
 
  private $genres = array();
  private $index = array();

  function __construct($name, $address, $number){
   $this->library_name = $name;
   $this->library_address = $address;
   $this->library_number = $number;
  } 

  function print_lib($library){
    
    echo "<br>
      New library was created 
      Library Name: $this->library_name<br>
      Library Address: $this->library_address <br>
      Library Ph:  $this->library_number <br>
      <br>";
    
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

    $lib1 = new Library(...$_POST["lib_details"]);
    $lib1->print_lib($lib1);


?>
