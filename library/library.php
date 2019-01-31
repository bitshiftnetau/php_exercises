<?php
include "library_header.php";
include "library_container_header.php";
?>

<div class="library full-size">
<h2>Create new library</h2>
  <form action="store_library.php" method="POST">
    Library Name: <input type="text" name="lib_details[]"><br>
    Library Address: <input type="text" name="lib_details[]"><br>
    Library Ph #: <input type="text" name="lib_details[]"><br>
  <input type="submit" value="submit"><br>
</form>

</div>

<?php 
include "library_footer.php";
include "library_container_footer.php";
?>
