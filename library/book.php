<?php
include "library_header.php";
?>


<form action="store_book.php" method="POST" id="details">

  <div class="form-group">

    <div class="form-element">
     <input type="text" class="form-control" name="book_details[]" id="your-name" placeholder="your name" required>
    </div>

    <div class="form-element">
      <input type="text" class="form-control" name="book_details[]" id="title" placeholder="title" required>
    </div>

    <div class="form-element">
      <input type="text" class="form-control" name="book_details[]" id="author" placeholder="author" required>
    </div>

    <div class="form-element">
     <input type="text" class="form-control" name="book_details[]" id="pages" placeholder="# of pages" required>
    </div>

    <div class="form-element">
     <input type="text" class="form-control" name="book_details[]" id="genre" placeholder="genre" required>
    </div>

    <input type="submit" class="btn btn-secondary fade-out grad"  value="submit">

</form>


<?php
include "library_footer.php"; 
?>
