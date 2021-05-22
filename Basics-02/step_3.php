<?php

function swap($name , $surname){
    $temp = $name;
    $name = $surname;
    $surname = $temp;
     echo $name;
     echo $surname;
}
 swap("Dalia" , "Dandashi");
 
 
?>