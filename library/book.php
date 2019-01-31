<?php
include "library_header.php";
include "library_container_header.php";
?>

<div class="container-fluid book full-size">


<div class="container-fluid form-border">

<p>Enter the details of a book</p>

<form action="store_book.php" method="POST" id="details">

  <div class="form-group">
    <div>
      <label for="your-name">Name: </label>
      <input type="text" class="form-control" name="book_details[]" id="your-name" placeholder="your name" required><br>
    </div>
    <div>
      <label for="title">Title: </label>
      <input type="text" class="form-control" name="book_details[]" id="title" placeholder="title" required><br>
    </div>
    <div>
      <label for="author">Author: </label>
      <input type="text" class="form-control" name="book_details[]" id="author" placeholder="author" required><br>
    </div>
    <div>
      <label for="pages"># of pages: </label>
      <input type="text" class="form-control" name="book_details[]" id="pages" placeholder="# of pages" required><br>
    </div>
    <div>
      <label for="genre">Genre: </label>
      <input type="text" class="form-control" name="book_details[]" id="genre" placeholder="genre" required><br>
    </div>

    <input type="submit" value="submit"><br>

</form>

</div>


</div>
 
<?php
include "library_footer.php"; 
include "library_container_footer.php";
?>
