<?php
for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++){
        if(($i==1)||($i==7) || ($i==$j)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

?>