<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  

  <form action="index.php" method="POST">
    <input type="number" name="numbers[]">
     *: <input type="radio" name="operator[]" value="1">
     /: <input type="radio" name="operator[]" value="2">
     +: <input type="radio" name="operator[]" value="3">
     -: <input type="radio" name="operator[]" value="4">
    <input type="number" name="numbers[]">
    <input type="submit" value="=">
  </form>


  <?php

    $jump_table = array("1"=>"*",
                        "2"=>"/",
                        "3"=>"+",
                        "4"=>"-");

    $operator_form_array = $_POST["operator"];
    $numbers = $_POST["numbers"];
    $operator = $jump_table[$operator_form_array[0]];

    echo "<br>";
    echo "number 1 = $numbers[0]<br>";
    echo "number 2 = $numbers[1]<br><br>";

    echo "$numbers[0]";
    echo $operand = $jump_table[$operator_form_array[0]];
    echo "$numbers[1]";
    echo " = ";

    switch($operand){
    case "*": echo $numbers[0] * $numbers[1]; break;
    case "/": echo $numbers[0] / $numbers[1]; break;
    case "-": echo $numbers[0] - $numbers[1]; break;
    case "+": echo $numbers[0] + $numbers[1]; break;
    default: echo "Please enter set of values";
    }
  ?>

</body>
</html>
