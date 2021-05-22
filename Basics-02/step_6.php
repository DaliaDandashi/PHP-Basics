<?php
function numadd($num){
    $bla = 0;
    $new =str_split($num); //output new['5', '4', '3, '2', '1']
    
  for($x = 0; $x < sizeof($new); $x++){
    $bla += number_format($new[$x]);
  }
  echo $bla;
}
numadd(54321);
?>