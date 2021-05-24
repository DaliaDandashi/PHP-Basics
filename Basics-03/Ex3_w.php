<?php
$text="Hello World";
$words = explode(" ", $text); // explode function looks for " " and creates an array, where each word is an element of the array
$now = count($words);
$j = 0;
for($i=0; $i<$now; $i++)
{
if ($words[$i] == "the" or $words[$i] == "The")
{
$j =  $j+1;
}
}
echo $j;
?>
?>