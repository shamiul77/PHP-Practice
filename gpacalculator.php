<?php
$marks = 222;

if ($marks>= 80 && $marks<=100){
    echo "A+";
}elseif($marks>= 70 && $marks<=79){
    echo "A";
}elseif($marks>= 60 && $marks<=69){
    echo "A-";
}elseif($marks>= 50 && $marks<=59){
    echo "B";
}elseif($marks>= 40 && $marks<=49){
    echo "c";
}elseif($marks>= 33 && $marks<=39){
    echo "D";
}elseif( $marks<=33){
    echo "Fail";
}else{
    echo "Invalid Number";
}

?>