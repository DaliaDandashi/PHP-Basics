<?php

 function replace(){
    $p = "python is good language, I have to learn python";
    $replace_string = str_replace("python","php", $p);
    echo $replace_string;
}

replace();
?>