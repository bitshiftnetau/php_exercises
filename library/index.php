<?php
  include "library_header.php";
?>

    <div class="row">
      <div class="col"></div>

      <div class="col-3">
      <form action="book.php" method="POST">
        <div class="form-element">
          <button type="submit" class="btn btn-secondary home-btns fade-out grad">New Book</button>
        </div>
      </form>
      </div>

      <div class="col"></div>
    </div>

    <div class="row">
      <div class="col"></div>

      <div class="col-3">
      <form action="library.php" method="POST">
        <div class="form-element">
          <button type="submit" class="btn btn-secondary home-btns fade-out grad">New Library</button>
        </div>
      </form>
      </div>

      <div class="col"></div>
    </div>


<?php
  include "library_footer.php";
?>



