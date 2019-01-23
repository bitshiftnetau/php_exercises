<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

  <h1>A simple number counter</h1>
  <p>
    Let's count from the first number to the second number. 
    We'll increment the count by the value placed in in the "Increment Value" box.  
  </p>

  <form action="index.php" method="POST">
   #1: <input type="number" name="num[]" ><br>    
   #2: <input type="number" name="num[]" ><br>   
   Increment Value: <input type="number" name="num[]" ><br>    
    <input type="submit" value="count" ><br>
</form>

<?php
  
$num_array = $_POST["num"];
$count = count($num_array);

echo "Number of elements entered: $count <br>";

  
  echo "i = $i";

  for($i = $num_array[0]; $i < $num_array[1]; $i += $num_array[3]){

    $i_store = $i;
    $num_total;
  echo "test<br>";

  if($i < 0){
      $i_neg = $i;
      $i *= 2;
      $num_total[$i/$i] = $i_neg; 
   } else if ($i == 0){
      $i_store *= 2;
      $num_total[$i_store] = $i; 
   } else if($num_array[0] < 0){ 
      $i_store = $i - $num_array[0];
      $num_total[$i_store] = $i;
   } else {
      $num_total[$i] = $i;
   }

  echo "Current count is: $i<br>";

  }

  for($j = 0; $j < count($num_array); $j++){
    $k = $num_total[$j];
    echo "Index $j: $k<br>";
  }

?>
</body>
</html>
