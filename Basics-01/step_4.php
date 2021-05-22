<?php
$name="Dalia"
$position="tech consultant";
$github_url="https://github.com/DaliaDandashi";
echo " Hello, I'm " .$name. ", I'm a " .$position. "please check my github link " .$github_url;

$final = '';
$final .= "Hello, I'm " . $name;
$final .= ", I'm a ";
$final .= $position;
$final .=  " please check my github link ";
$final .= $github_URL;
echo $final;

echo 'Hello, I\'m  ' . $name . ', I\'m a ' . $position .'please check my github link' . $github_URL;
echo " Hello, I'm {$name} , I'm a {$position} please check my github link {$github_URL}";
?>
