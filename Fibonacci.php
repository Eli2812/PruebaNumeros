<?php 
 $num1 = 0;
 $num2 = 1;
 $num3;

 echo $num1 . "\n" . $num2 . "\n";


 for ($i = 0; $i <=14; $i++) {
    $num3= $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;

    echo $num3 . "\n";


 }
?>