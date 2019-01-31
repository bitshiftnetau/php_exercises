<?php
  include "library_header.php";
?>

<div class="home full-size container-fluid">
  <div class="row">
    <div class="col">
      <form action="book.php" class="home_btns" method="POST">
        <button type="submit" class="btn btn-secondary">New Book</button>
      </form>
    </div>

    <div class="col">
      <form action="library.php" class="home_btns" method="POST">
        <button type="submit" class="btn btn-secondary">New Library</button>
      </form>
    </div>

  </div>

</div>


<?php
  include "library_footer.php";
?>



