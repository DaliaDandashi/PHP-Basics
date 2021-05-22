<?php
function reverse($r){
    $stripped = str_replace(' ', '', $r);
    if ($stripped==strrev($stripped)){
         echo "is equal";

    }
   
    else {
        echo "not equal";
    }
}
reverse("nurses run");
?>