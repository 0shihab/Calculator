<?php include "database.php"; ?>
<?php
    if (isset($_POST['submit'])){
      $number1=$_POST['input1'];
      $number2=$_POST['input2'];
      $operator=$_POST['operator'];
      if ($operator == '+'){
          $result= $number1 + $number2;
      }
      elseif($operator == '-'){
          $result= $number1 - $number2;
      }
      elseif($operator == '*'){
          $result= $number1 * $number2;
      }
      elseif($operator == '/'){
          $result= $number1 / $number2;
      }
      elseif($operator == '%'){
          $result= $number1 % $number2;
      }
      else {
          echo "Please select any operator";
      }
 //Insertion in Database
  $sql="INSERT INTO calculation(number1,operator,number2,result,)
  VALUES('$number1', '$operator','$number2', '$result',)";
if (mysqli_query( $con,$sql)){
die("Error :");
}else{
header("LOCATION: index.php");
}
}
?>