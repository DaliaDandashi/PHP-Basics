<?php
function squareroot($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return $x;
}
echo squareroot(68);
echo "<br>" ;
echo squareroot(16);
echo "<br>";
?> 