<?php

function power($n)
{
   if(abs($n) > 0 && (abs($n) & (abs($n) - 1)) == 0)
    {
		return "$n is power of 2";
    }
   else
    {
		return "$n is not power of 2";
    }
}
print_r(power(-8)."\n");


?>