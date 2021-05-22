<?php
    function test($num ){
       if($num>30){
           echo "greater than 30";
       }
       else if($num > 20){
           echo " > 20";
       }
       else if($num > 10){
           echo " > 10";
       }else {
           echo "<10";
       }
    }
    test(35);
    ?>
