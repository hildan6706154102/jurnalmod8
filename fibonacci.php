<?php

function printFibonacci($n)
 {
 
  $first = 1;
  $second = 1;
 
  echo "Fibonacci Series \n";
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}
  
/* Function call to print Fibonacci series upto 4 numbers. */
 
printFibonacci(4);

?>
