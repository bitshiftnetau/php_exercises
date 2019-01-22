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
   #1: <input type="number" step="0.001" name="num[]" ><br>    
   #2: <input type="number" step="0.001" name="num[]" ><br>   
   Increment Value: <input type="number" step="0.001" name="num[]" ><br>    
    <input type="submit" step="0.001" value="count" ><br>
</form>

<?php
  
  $num_array = $_POST["num"];
  echo $count($num_array);

  for($i = $num_array[0]; $i < $num_array[1]; $i += $num_array[3]){

    $i_store = $i;
    $num_total;

  if($i < 0){
      $i_neg = $i;
      $i *= 2;
      $num_total[$i/$i] = $i_neg; 
   } else if ($i === 0){
     $i_store *= 2;
     $num_total[$i_store] = $i; 
   } else {
     $i_store = $i - $num_array[0];
      $num_total[$i_store];
   }

  echo "Current count is: $i";

  }

  for($j = 0; $j < count($num_array); $j++){
    $k = $num_total[$j];
    echo "Index $j: $k";
  }

?>
</body>
</html>
