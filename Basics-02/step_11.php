<?php

function checkPrime($n){
    $x = 2;
if($x<$n){
    for ($x=2; $x<=$n/2; $x++){
    if($n%$x==0){   
        return 0;
    } 
    else{
        return 1;
    }
}
}
}
    $n = 11;
  $a = checkPrime($n);
    if ($a==0){
         echo "this is not a prime number";
    }
    else {
       echo "this is a prime number";
    }

?>