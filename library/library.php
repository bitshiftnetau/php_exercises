<?php
include "library_header.php";
?>

<form action="store_library.php" method="POST" id="details">

  <div class="form-group">

    <div class="form-element">
      <input type="text" class="form-control" name="lib_details[]" id="library-name" placeholder="library-name" required>
    </div>

    <div class="form-element">
      <input type="text" class="form-control" name="lib_details[]" id="address" placeholder="address" required>
    </div>

    <div class="form-element">
      <input type="text" class="form-control" name="lib_details[]" id="phone" placeholder="phone" required>
    </div>

    <input type="submit" class="btn btn-secondary fade-out grad" value="submit">

</form>

<?php 
include "library_footer.php";
?>
