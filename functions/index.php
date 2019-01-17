<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<form action="index.php" method="POST">
  Name: <input type="text" name="name">
  Age: <input type="text" name="age">
  <input type="submit" name="submit">
</form>

  <?php

    function cube($n){
      return $n * $n *$n;
    }

    function new_function($name, $age){
      echo "$name is $age <br>";
      return cube($age);
    }

    //echo "testing this";
    //echo $one = new_function($_POST["name"], $_POST["age"]);
    //echo "return is $one";

    $cubed = new_function($_POST["name"], $_POST["age"]);
    echo "age to the power of 3 is: $cubed";

    function ternary($num1, $num2){
      return $num1 > $num2 ? $num1 : $num2;
    }

    echo $num_ret = ternary(3,5);



  ?>

</body>
</html>
