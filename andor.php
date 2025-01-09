<?php
$a = 10;
$b = 20;
$c = 30;

if ($a>$b || $a>$c){
    echo "Ok";
}elseif ($a>$b && $a>$c){
    echo "Good";
}else{
    echo "Not Ok";
}

?>